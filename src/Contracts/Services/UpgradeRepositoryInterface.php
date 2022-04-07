<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface UpgradeRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;
}
