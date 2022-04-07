<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface CepRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;
}
