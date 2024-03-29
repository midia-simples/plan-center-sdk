<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\PlanRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Plan extends Repository implements PlanRepositoryInterface
{
    /**
     * @var \Illuminate\Http\Client\PendingRequest
     */
    protected PendingRequest $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array
    {
        return $this->getRequest('plans', $options);
    }

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array
    {
        return $this->getRequest("plans/{$id}", $options);
    }

     /**
     * @param $cep
     * @return array
     */
    public function findByCep(array $options = []): array
    {
        return $this->getRequest("plans/cep", $options);
    }
}
