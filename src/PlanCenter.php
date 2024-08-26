<?php

namespace MidiaSimples\PlanCenterSDK;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use MidiaSimples\PlanCenterSDK\Contracts\ManagerInterface;
use MidiaSimples\PlanCenterSDK\Services\{
    Attribute,
    Banner,
    Cep,
    Channel,
    City,
    Cluster,
    Combo,
    Company,
    FaqCategory,
    Hour,
    Lead,
    Plan,
    Post,
    Unit,
    Upgrade,
    Sva,
    Installation,
    LandingPage
};

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
     * @var string
     */
    protected string $userAgent;

    /**
     * @var \Illuminate\Http\Client\PendingRequest
     */
    protected PendingRequest $client;

    public function __construct()
    {
        $this->setSecretKey();
        $this->setUserAget();
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
     * Obtenha o nome do projeto na qual está fazendo a requisição para o Plan center
     * 
     * @return void
     */
    public function setUserAget(string $value = null)
    {
        $this->userAgent = $value ?? Config::get('plancenter.user_agent');
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
            'User-Agent' => $this->userAgent,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->withToken($this->secretKey);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Attribute
     */
    public function attributes(): Attribute
    {
        return new Attribute($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Banner
     */
    public function banners(): Banner
    {
        return new Banner($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Cep
     */
    public function cep(): Cep
    {
        return new Cep($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Channel
     */
    public function channels(): Channel
    {
        return new Channel($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\City
     */
    public function cities(): City
    {
        return new City($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Combo
     */
    public function combos(): Combo
    {
        return new Combo($this->client);
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
     * @return \MidiaSimples\PlanCenterSDK\Services\FaqCategory
     */
    public function faqCategories(): FaqCategory
    {
        return new FaqCategory($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Hour
     */
    public function hours(): Hour
    {
        return new Hour($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Installation
     */
    public function installation(): Installation
    {
        return new Installation($this->client);
    }

    /**
     * @return \Midiasimples\PlanCenterSDK\Services\LandingPage
     */
    public function landingPages(): LandingPage {
        return new LandingPage($this->client);
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

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Post
     */
    public function posts(): Post
    {
        return new Post($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Unit
     */
    public function units(): Unit
    {
        return new Unit($this->client);
    }

    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Upgrade
     */
    public function upgrades(): Upgrade
    {
        return new Upgrade($this->client);
    }
    /**
     * @return \MidiaSimples\PlanCenterSDK\Services\Sva
     */
    public function svas(): Sva
    {
        return new Sva($this->client);
    }
}
