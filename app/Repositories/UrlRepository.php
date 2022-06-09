<?php

namespace App\Repository\UrlRepository;

use App\Interfaces\UrlInterface;
use App\Http\Requests\UrlRequest;
use App\Http\Model\UrlContainer;
class UrlRepository implements UrlInterface {
    protected $urlContianer;
    public function __construct(UrlContainer $urlContainer) {
        $this->urlContianer = $urlContianer;
    }

    public function saveUrl(UrlContainer $urlContainer, UrlRequest $request){
        $generatedUrl = $this -> urlContianer -> create($request -> validate());
        return $generatedUrl;
    }
} 
