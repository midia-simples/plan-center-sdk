<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\ChannelRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class Channel extends Repository implements ChannelRepositoryInterface
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
        return $this->getRequest('channels', $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array
    {
        return $this->getRequest("channels/paginate", $options);
    }

    /**
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->getRequest("channels/{$id}");
    }
}
