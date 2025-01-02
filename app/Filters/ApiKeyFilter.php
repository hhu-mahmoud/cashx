<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\ApiKeyModel;

class ApiKeyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Get the API key from the request header
        $apiKey = $request->getHeaderLine('ApiKey');
//        if (empty($apiKey)) {
//            // check the session
//            if (!session()->has('user_id')) {
//                return redirect()->to('/')->with('status', 'error')->with('message', 'Session is invalid or expired.');
//            }
//            return;
//        }
        if (!$apiKey) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status'  => 'error',
                           'message' => 'API Key is required.'
                ]);
        }

        $apiKeyModel = new ApiKeyModel();
        $key = $apiKeyModel->getKey($apiKey);

        if (!$key) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status'  => 'error',
                           'message' => 'Invalid API Key.'
                ]);
        }

        // Check if the API key is active
        if ($key['Status'] == 0) {
            return service('response')
                ->setStatusCode(403)
                ->setJSON(['status'  => 'error',
                           'message' => 'API Key is inactive.'
                ]);
        }

        // Check expiration
        if (!empty($key['ExpiresAt']) && strtotime($key['ExpiresAt']) < time()) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status'  => 'error',
                           'message' => 'API Key has expired.'
                ]);
        }

        // Check allowed IPs
        if (!empty($key['AllowedIPs'])) {
            $allowedIps = explode(',', $key['AllowedIPs']);
            if (!in_array($request->getIPAddress(), $allowedIps)) {
                return service('response')
                    ->setStatusCode(403)
                    ->setJSON(['status'  => 'error',
                               'message' => 'Access denied from this IP address.'
                    ]);
            }
        }

        // Check allowed models
        if (!empty($key['AllowedModels'])) {
            $allowedModels = explode(',', $key['AllowedModels']);
            $currentModel = $arguments['model'] ?? null;

            if ($currentModel && !in_array($currentModel, $allowedModels)) {
                return service('response')
                    ->setStatusCode(403)
                    ->setJSON(['status'  => 'error',
                               'message' => 'Access denied to this model.'
                    ]);
            }
        }

        // Check allowed methods
        if (!empty($key['AllowedMethods'])) {
            $allowedMethods = explode(',', $key['AllowedMethods']);
            $currentMethod = strtoupper($request->getMethod());

            if (!in_array($currentMethod, $allowedMethods)) {
                return service('response')
                    ->setStatusCode(403)
                    ->setJSON(['status'  => 'error',
                               'message' => 'HTTP method not allowed.'
                    ]);
            }
        }

        // Attach API key data to the request for later use (optional)
        $request->keyData = $key;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after the request
    }
}
