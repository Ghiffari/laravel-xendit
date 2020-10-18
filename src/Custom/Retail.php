<?php

namespace Ghiffariaq\LaraXendit\Custom;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Ghiffariaq\LaraXendit\Traits\ApiHelper;
class Retail
{
    use ApiHelper;

    public static function create($params = [])
    {
        $res = self::rawRequest('POST','fixed_payment_code',$params);
        return $res;
    }

    public static function pay($id, $params = [])
    {
        $res = self::rawRequest('POST',"fixed_payment_code/simulate_payment",$params);
        return $res;
    }

    public static function getDetail($id)
    {
        $res = self::apiRequest('GET',"fixed_payment_code/$id");
        return $res;
    }

}