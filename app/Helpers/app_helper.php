<?php

declare(strict_types=1);


// String Helpers

if (!function_exists('nameof')) {

    function nameof($var)
    {
        static $cache = [];

        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        $lineNum = $backtrace[0]['line'];
        $file = $backtrace[0]['file'];
        $key = $file . $lineNum;
        if (array_key_exists($key, $cache)) {
            return $cache[$key];
        }
        $file = fopen($file, 'rb');
        // seek to the appropriate line number
        for ($i = 0; $i < $lineNum - 1; $i++) {
            fgets($file);
        }
        $line = fgets($file);
        fclose($file);

        // sanity check
        $first = strpos($line, 'nameof(');
        $last = strrpos($line, 'nameof(');
        if ($first !== $last) {
            throw new \LogicException('There are multiple calls to nameof on the same line');
        }

        // get the variable name
        preg_match('/nameof\s*\((.*?)\)/', $line, $matches);

        // remove whitespace
        $match = trim($matches[1]);

        // remove the $ if it exists
        $match = ltrim($match, '$');

        // remove parens
        $match = str_replace([
            '(',
            ')',
            '...'
        ], '', $match);

        if (str_contains($match, '->')) {
            // strip the -> if it exists
            $match = substr(strstr($match, '->'), 2) ?: $match;
        }

        if (str_contains($match, '::')) {
            // strip the :: if it exists
            $match = substr(strstr($match, '::'), 2) ?: $match;
        }

        return $cache[$key] = $match;
    }
}

if (!function_exists('caller')) {

    function caller()
    {
        $dbt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        return $dbt[1]['function'] ?? null;
    }
}
