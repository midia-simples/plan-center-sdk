<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface CityRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;
}
