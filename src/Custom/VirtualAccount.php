<?php

namespace Ghiffariaq\LaraXendit\Custom;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Ghiffariaq\LaraXendit\Traits\ApiHelper;
class VirtualAccount
{
    use ApiHelper;

    public static function create($params = [])
    {
        $res = self::rawRequest('POST','callback_virtual_accounts',$params);
        return $res;
    }

    public static function pay($id, $params = [])
    {
        $res = self::rawRequest('POST',"callback_virtual_accounts/external_id=$id/simulate_payment",$params);
        return $res;
    }

    public static function getPayment($id, $params = [])
    {
        $res = self::apiRequest('GET',"callback_virtual_account_payments/payment_id=$id",$params);
        return $res;
    }

    public static function getDetail($id,$params = [])
    {
        $res = self::apiRequest('GET',"callback_virtual_accounts/$id",$params);
        return $res;
    }

    public static function update($id,$params = [])
    {
        $res = self::apiRequest('PATCH',"callback_virtual_accounts/$id",$params);
        return $res;
    }

}