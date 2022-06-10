<?php

namespace App\Http\Controllers;

use App\Interfaces\UrlInterface;
use App\Repositories\UrlRepository;
use App\Models\UrlContainer;

use App\Http\Requests\UrlRequest;
// use Illuminate\Http\Request;
class SaveUrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected $urlInterface, $request;

    public function __construct(UrlInterface $urlInterface) {
        $this->urlInterface = $urlInterface;
        // $this->request = $request;
    }
    public function __invoke(UrlRequest $request) {   
        $generatedUrl = $this -> urlInterface -> saveUrl($request -> validated());
        return $generatedUrl;
    }
}
