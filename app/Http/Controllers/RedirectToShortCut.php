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
        // return $request->all();
        // $requestData = $request->validate([
        //     'shortCutUrl' => 'required|exists:url_containers,shortCutUrl'
        // ]);

        $findUrl = $this->urlInterface->redirectToShortCutUrl($request->shortCutUrl);
        if ($findUrl) {
            return response()->json([
                "message" => "Success! The given data was found.",
                "data" => $findUrl,
            ]);
        }
        return response()->json([
            "message" => "Error! The given shortcut url does not exist.",
            "data" => $findUrl,
        ]);
    }
}
