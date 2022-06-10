<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\UrlInterface;
use App\Models\UrlContainer;

class UrlRepository implements UrlInterface {
    protected $model;
    // construct to initialized outer variables to be used around the class
    public function __construct(UrlContainer $model) {
        $this-> model = $model;
        // $this->request = $request;   
    }
    public function saveUrl(array $data) {
          return $this->model->create($data);
    }
} 
