<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LanguageController extends BaseController
{
    public function switchLanguage($lang = 'en')
    {

        // Check if the language is supported
        $supportedLocales = ['en', 'ar', 'de'];

        if (in_array($lang, $supportedLocales)) {
            // Store the selected language in the session
            session()->set('lang', $lang);
        }

        // Redirect back to the previous page
        return redirect()->back();
    }
}