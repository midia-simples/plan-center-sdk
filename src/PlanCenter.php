<?php

namespace MidiaSimples\PlanCenterSDK;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use MidiaSimples\PlanCenterSDK\Contracts\ManagerContract;

class PlanCenter implements ManagerContract
{
    /**
     * @var string
     */
    protected string $baseUrl;

    /**
     * @var string
     */
    protected string $secretKey;

    /**
     * @var \Illuminate\Http\Client\PendingRequest
     */
    protected PendingRequest $client;

    public function __construct()
    {
        $this->setSecretKey();
        $this->setBaseUrl();
        $this->setRequestOptions();
    }

    /**
     * Obter URL base do arquivo de configuração do Plan Center
     *
     * @return void
     */
    public function setBaseUrl()
    {
        $this->baseUrl = Config::get('plancenter.base_url');
    }

    /**
     * Obtenha a chave secreta do arquivo de configuração do Plan Center
     *
     * @return void
     */
    public function setSecretKey()
    {
        $this->secretKey = Config::get('plancenter.secret_key');
    }

    /**
     * Definir opções para fazer a solicitação do cliente
     *
     * @return void
     */
    private function setRequestOptions()
    {
        $this->client = Http::withOptions([
            'base_uri' => $this->baseUrl,
        ])->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->withToken($this->secretKey);
    }
}