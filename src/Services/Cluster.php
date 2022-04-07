<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\ClusterRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Cluster extends Repository implements ClusterRepositoryInterface
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
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array
    {
        return $this->getRequest("clusters/{$id}", $options);
    }
}
