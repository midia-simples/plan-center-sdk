<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface CompanyRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array;
}
