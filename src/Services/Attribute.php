<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\AttributeRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Attribute extends Repository implements AttributeRepositoryInterface
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
        return $this->getRequest("attributes", $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array
    {
        return $this->getRequest("attributes/paginate", $options);
    }

    /**
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->getRequest("attributes/{$id}");
    }
}