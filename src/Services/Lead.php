<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Repository;

class Lead extends Repository
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
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        return $this->postRequest('lead', $data);
    }

    /**
     * @param $id
     * @param array $data
     * @return array
     */
    public function update($id, array $data): array
    {
        return $this->putRequest("lead/{$id}", $data);
    }
}