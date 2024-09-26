<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\CustomFieldRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class CustomField extends Repository implements CustomFieldRepositoryInterface
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
        return $this->getRequest("custom-fields", $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array
    {
        return $this->getRequest("custom-fields/paginate", $options);
    }

    /**
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->getRequest("custom-fields/{$id}");
    }
}