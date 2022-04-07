<?php

namespace MidiaSimples\PlanCenterSDK;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use MidiaSimples\PlanCenterSDK\Contracts\ManagerInterface;
use MidiaSimples\PlanCenterSDK\Services\Cep;
use MidiaSimples\PlanCenterSDK\Services\Cluster;
use MidiaSimples\PlanCenterSDK\Services\Company;
use MidiaSimples\PlanCenterSDK\Services\Hour;
use MidiaSimples\PlanCenterSDK\Services\Lead;
use MidiaSimples\PlanCenterSDK\Services\Plan;

class PlanCenter implements ManagerInterface
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
    public function setBaseUrl(string $value = null)
    {
        $this->baseUrl = $value ?? Config::get('plancenter.base_url');
    }

    /**
     * Obtenha a chave secreta do arquivo de configuração do Plan Center
     *
     * @return void
     */
    public function setSecretKey(string $value = null)
    {
        $this->secretKey = $value ?? Config::get('plancenter.secret_key');
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

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Cep
     */
    public function cep(): Cep
    {
        return new Cep($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Company
     */
    public function companies(): Company
    {
        return new Company($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Cluster
     */
    public function clusters(): Cluster
    {
        return new Cluster($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Hour
     */
    public function hours(): Hour
    {
        return new Hour($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Lead
     */
    public function leads(): Lead
    {
        return new Lead($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Plan
     */
    public function plans(): Plan
    {
        return new Plan($this->client);
    }
}
