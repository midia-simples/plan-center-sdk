<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\UnitRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Unit extends Repository implements UnitRepositoryInterface
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
        return $this->getRequest('service-units', $options);
    }

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array
    {
        return $this->getRequest("service-units/{$id}", $options);
    }
}
