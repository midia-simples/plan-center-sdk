<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface LandingPageRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;
}