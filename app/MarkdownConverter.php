<?php

namespace App;

use Illuminate\Support\Str;

class MarkdownConverter
{
    public function convert($text)
    {
        return Str::of($text)->markdown();
    }
}
