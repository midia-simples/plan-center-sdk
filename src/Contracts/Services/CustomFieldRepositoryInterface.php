<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface CustomFieldRepositoryInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array;

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array;

    /**
     * @param $id
     * @return array
     */
    public function show($id): array;
}