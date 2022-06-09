<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UrlController;
use App\Interfaces\UrlInterface;

class SaveUrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected $urlInterface;
    public function __construct(UrlInterface $urlInterface) {
        $this->urlInterface = $urlInterface;
    }
    public function __invoke()
    {   
        $generatedUrl = $urlInterface -> saveUrl();
        // return response() -> json([
        //     'status' => 200,
        //     'data' => $generatedUrl,
        //     'message' => 'Query ok'
        // ]);
        return response([
            'statusCode' => 200,
            'data' => 'received',
        ]);
    }
}
