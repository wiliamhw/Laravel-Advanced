<?php


namespace App\Mixins;


class StrMixins
{
    public function partNumber()
    {
        // partNumber doesn't need to have parameter for $part
        // because only the function below is stored on $macros array in Macroable.php
        return function ($part) {
            return 'AB-' . substr($part, 0, 3) . '-' . substr($part, 3);
        };
    }

    public function prefix()
    {
        return function ($string, $prefix = 'AB-') {
            return $prefix . $string;
        };
    }
}
