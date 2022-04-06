<?php

namespace MidiaSimples\PlanCenterSDK\Contracts;

interface ManagerInterface
{
    public function setBaseUrl(string $value = null);

    public function setSecretKey(string $value = null);
}