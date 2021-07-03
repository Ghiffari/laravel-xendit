<?php

namespace Ghiffariaq\LaraXendit\Custom;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Ghiffariaq\LaraXendit\Traits\ApiHelper;
class EWallet
{
    use ApiHelper;

    public static function create($params = [])
    {
        $res = self::rawRequest('POST','ewallets/charges',$params);
        return $res;
    }

    public static function getDetail($params = [])
    {
        $res = self::apiRequest('GET',"ewallets/charges",$params);
        return $res;
    }

}
