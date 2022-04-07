<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\PostRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Post extends Repository implements PostRepositoryInterface
{
    /**
     * @var \Illuminate\Http\Client\PendingRequest
     */
    protected PendingRequest $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param array $options
     * @return array
     */
    public function all(array $options = []): array
    {
        return $this->getRequest('posts', $options);
    }

    /**
     * @param $id
     * @param array $options
     * @return array
     */
    public function findById($id, array $options = []): array
    {
        return $this->getRequest("posts/{$id}", $options);
    }
}
