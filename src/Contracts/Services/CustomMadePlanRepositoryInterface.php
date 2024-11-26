<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface CustomMadePlanRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;

}
