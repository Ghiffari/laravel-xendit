<?php

namespace Ghiffariaq\LaraXendit\Custom;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Ghiffariaq\LaraXendit\Traits\ApiHelper;
class Card
{
    use ApiHelper;

    public static function charge($params = [])
    {
        $res = self::rawRequest('POST','credit_card_charges',$params);
        return $res;
    }

    public static function getDetail($id,$params = [])
    {
        $res = self::apiRequest('GET',"credit_card_charges/$id",$params);
        return $res;
    }

}