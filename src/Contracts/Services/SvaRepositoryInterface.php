<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface SvaRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;

}