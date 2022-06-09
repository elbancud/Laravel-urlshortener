<?php

namespace App\Repository\UrlRepository;

use App\Interfaces\UrlInterface;
use Illuminate\Database\Model;
use App\Http\Requests\UrlRequest;

class UrlRepository implements UrlInterface {
    protected $model;
    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function saveUrl(UrlRequest $request) {
        $this->model::create($request -> validate());
    }
} 
