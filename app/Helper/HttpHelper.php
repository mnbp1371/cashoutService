<?php

namespace App\Helper;

use Illuminate\Support\Facades\Http;

trait HttpHelper
{
    private string $baseUrl = 'https://api.idpay.ir/v2/api/wallets/cash-outs';
    private string $apiKey = '';

    public function call(string $url, string $method = 'get',array $params = [])
    {
        return Http::withHeaders([
            'x-api-key' => $this->apiKey
        ])->{$method}("{$this->baseUrl}/$url", $params)->json();
    }
}
