<?php

namespace App\Repositories;

use App\Interfaces\UrlInterface;
use App\Models\UrlContainer;
use PhpParser\Node\Stmt\TryCatch;

class UrlRepository implements UrlInterface
{
    protected $model;
    // construct to initialized outer variables to be used around the class
    public function __construct(UrlContainer $model)
    {
        $this->model = $model;
    }
    public function saveUrl(array $data)
    {
        // From the global model variable create
        return $this->model->create($data);
    }
}
