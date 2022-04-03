<?php

namespace MidiaSimples\PlanCenterSDK;

abstract class Repository
{
    /**
     * Resposta das solicitações feitas ao Plan Center
     *
     * @var mixed
     */
    protected $response;

    /**
     * @param string $uri
     * @param array $options
     * @return array
     */
    protected function getRequest(string $uri, array $options = []): array
    {
        return $this->setHttpResponse('get', $uri, $options)->getResponse();
    }

    /**
     * @param string $uri
     * @param array $options
     * @return array
     */
    protected function postRequest(string $uri, array $options = []): array
    {
        return $this->setHttpResponse('post', $uri, $options)->getResponse();
    }

    /**
     * @param string $uri
     * @param array $options
     * @return array
     */
    protected function putRequest(string $uri, array $options = []): array
    {
        return $this->setHttpResponse('put', $uri, $options)->getResponse();
    }

    /**
     * @param string $uri
     * @param array $options
     * @return array
     */
    protected function deleteRequest(string $uri, array $options = []): array
    {
        return $this->setHttpResponse('delete', $uri, $options)->getResponse();
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return Repository
     */
    private function setHttpResponse(string $method, string $uri, array $options = []): Repository
    {
        $method = strtolower($method);

        $this->response = $this->client->{$method}($uri, $options);

        return $this;
    }

    /**
     * Obtenha toda a resposta de uma operação
     *
     * @return array
     */
    protected function getResponse(): array
    {
        return json_decode($this->response->getBody(), true);
    }

    /**
     * Obtenha a resposta de dados de uma operação
     *
     * @return array
     */
    protected function getData(): array
    {
        return $this->getResponse()['data'];
    }
}