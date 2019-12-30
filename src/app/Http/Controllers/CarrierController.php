<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \EasyPost\EasyPost;

EasyPost::setApiKey(Auth::user()->api_key);

class CarrierController extends Controller
{
    /**
     * retrieveCarriers
     *
     * @param Request $request
     * @return void
     */
    public function retrieveCarriers(Request $request)
    {
        $carrier_types = \EasyPost\CarrierAccount::types();

        $response = $carrier_types;

        session()->flash("message", "CARRIERS RETRIEVED");
        return redirect()->back()->with(['response' => $response]);
    }
}
