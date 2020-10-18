<?php

namespace Ghiffariaq\LaraXendit\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\RequestException;

trait ApiHelper
{
	public static function apiRequest(string $method, string $command, array $parameters = [], $json = true)
    {
        $command_url = self::generateCommandUrl($command);
        $headers = [
            'Accept' => 'application/json',
        ];

        switch ($method) {
            case 'POST':
                $body = ['form_params' => $parameters];
                break;
            case 'PATCH':
                $body = ['json' => $parameters];
                break;
            case 'GET':
                $body = ['query' => $parameters];
                break;
            default:
                $body = [];
                break;
        }

        $client = new Client;

        try {
            $response = $client->request($method, $command_url, $body + [
                'auth' => [config('lara-xendit.secret_key'),''],
                'headers' => $headers]
            );    
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $rbody = json_decode($response->getBody()->getContents(), true);
            $rcode = $response->getStatusCode();
        }

        $rbody = json_decode($response->getBody(),$json);
        $rcode = (int) $response->getStatusCode();
        
        return [
            "data" => $rbody, 
            "code" => $rcode
        ];
    }

    public static function rawRequest(string $method, string $command, array $parameters = [],$json = true)
    {
        $command_url = self::generateCommandUrl($command);
        $client = new Client();

        try {
            $response = $client->request($method, $command_url, [
                'auth' => [config('lara-xendit.secret_key'),''],
                'body' => json_encode($parameters),
                'headers' => [
                    'Content-Type'     => 'application/json',
                ]
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $rbody = json_decode($response->getBody()->getContents(), true);
            $rcode = $response->getStatusCode();
        }
        $rbody = json_decode($response->getBody(), $json);
        $rcode = (int) $response->getStatusCode();
        
        return [
            "data" => $rbody, 
            "code" => $rcode
        ];
    }

    protected static function generateCommandUrl(string $command)
    {
        return config('lara-xendit.base_api_url') . '/' . $command;
    }


}