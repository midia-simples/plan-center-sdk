<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface ClusterRepositoryInterface
{
    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array;
}
