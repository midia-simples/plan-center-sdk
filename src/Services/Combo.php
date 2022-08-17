<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\ComboRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Combo extends Repository implements ComboRepositoryInterface
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
        return $this->getRequest('combos', $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array
    {
        return $this->getRequest("combos/paginate", $options);
    }

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function show($id, array $options = []): array
    {
        return $this->getRequest("combos/{$id}", $options);
    }
}
