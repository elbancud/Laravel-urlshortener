<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveUrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $url = $request -> validate(
            [   
                $baseUrl => "required | url | string",
                $shortCutUrl => "required | url | url_container:unique, ",
            ]
        );

    }
}
