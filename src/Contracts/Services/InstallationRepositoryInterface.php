<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface InstallationRepositoryInterface
{
    /**
     * @param string $plan_center_id
     * @return array
     */
    public function show(string $plan_center_id = ''): array;
}
