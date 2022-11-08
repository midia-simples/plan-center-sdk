<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface PostRepositoryInterface
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

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array;
}
