<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UrlInterface;

class RedirectToShortCut extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected $urlInterface;

    public function __construct(UrlInterface $urlInterface)
    {
        $this->urlInterface = $urlInterface;
    }
    public function __invoke(Request $request)
    {
        return $this->urlInterface($request->all());
    }
}
