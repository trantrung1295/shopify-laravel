<?php

namespace NtShopify\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Shopify\SayHello;

class ShopifyController extends Controller
{
    public function index(Request $request){
        $say= SayHello::world();
        $domain = $request->input('shop');
        $state = Uuid::uuid4()->toString();
        dd($state);
    }
    public function authorizeShopify(Request $request){
        dd($request);
    }
    function shopNameFromDomain($domain)
    {
        return substr($domain, 0, -14);
    }
}
