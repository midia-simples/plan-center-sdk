<?php

namespace MidiaSimples\PlanCenterSDK\Services;

use Illuminate\Http\Client\PendingRequest;
use MidiaSimples\PlanCenterSDK\Contracts\Services\FaqCategoryRepositoryInterface;
use MidiaSimples\PlanCenterSDK\Repository;

class FaqCategory extends Repository implements FaqCategoryRepositoryInterface
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
        return $this->getRequest('faq-categories', $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function paginate(array $options = []): array
    {
        return $this->getRequest("faq-categories/paginate", $options);
    }
}
