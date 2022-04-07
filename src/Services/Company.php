<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\CompanyRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Company extends Repository implements CompanyRepositoryInterface
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
        return $this->getRequest('companies', $options);
    }

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array
    {
        return $this->getRequest("companies/{$id}", $options);
    }
}
