<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface LeadRepositoryInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array;

    /**
     * @param $id
     * @param array $data
     * @return array
     */
    public function update($id, array $data): array;
}
