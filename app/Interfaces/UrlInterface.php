<?php

namespace App\Interfaces;

interface UrlInterface
{
    public function saveUrl(array $data);
    public function redirectToShortCutUrl(string $shortCutUrl);
}
