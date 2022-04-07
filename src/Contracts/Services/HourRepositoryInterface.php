<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface HourRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;
}
