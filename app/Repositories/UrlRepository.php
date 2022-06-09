<?php

namespace App\Repositories;

use App\Interfaces\UrlInterface;
use App\Http\Requests\UrlRequest;
use App\Models\UrlContainer;

class UrlRepository implements UrlInterface {
    protected $urlContianer;
    protected $requestContainer;

    public function __construct(UrlContainer $urlContainer, UrlRequest $request) {
        $this->urlContianer = $urlContianer;
        $this->requestContainer = $request;
    }

    public function saveUrl(){
        // $generatedUrl = $this -> urlContianer -> create($requestContainer -> validate());
       
        return response([
            'data' => 'hello'
        ]);
    }
} 
