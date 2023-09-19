<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\InstallationRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Installation extends Repository implements InstallationRepositoryInterface
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
     * @param string $plan_center_id
     * @return array
     */
    public function show($plan_center_id = ''): array
    {
        return $this->getRequest('installation/' . $plan_center_id);
    }
}
