<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SameOriginFilter implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$referer = $request->getServer('HTTP_REFERER');
		$host = $request->getServer('HTTP_HOST');

		if ($referer && !str_contains($referer, $host)) {
			return redirect()->to('/error')->with('error', 'Invalid Origin');
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do nothing
	}
}