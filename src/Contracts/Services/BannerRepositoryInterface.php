<?php

namespace MidiaSimples\PlanCenterSDK\Contracts\Services;

interface BannerRepositoryInterface
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
}
