# Plan Center SDK

> Um pacote para facilitar o consumo da API do projeto Plan Center

## Instalação

[PHP](https://php.net) 7.4+ e [Composer](https://getcomposer.org) são requeridos.

Para obter a versão mais recente do Laravel Plan Center, basta solicitar

```bash
composer require midia-simples/plan-center-sdk
```

Ou adicione a seguinte linha ao bloco require do seu arquivo `composer.json`.

```
"midia-simples/plan-center-sdk": "0.1.*"
```

Você precisará então executar `composer install` ou `composer update` para baixá-lo e ter o autoloader atualizado.

Uma vez instalado o Laravel Paystack, você precisa registrar o provedor de serviços. Abra `config/app.php` e adicione o seguinte à chave de `providers`.
```php
'providers' => [
    ...
    MidiaSimples\PlanCenterSDK\PlanCenterServiceProvider::class,
    ...
]
```

> Se você usa **Laravel >= 5.5**, pode pular esta etapa e ir para [**`configuração`**](https://github.com/midia-simples/plan-center-sdk#configuration)

* `MidiaSimples\PlanCenterSDK\PlanCenterServiceProvider::class`

Além disso, registre a Fachada assim:

```php
'aliases' => [
    ...
    'PlanCenter' => MidiaSimples\PlanCenterSDK\Facades\PlanCenter::class,
    ...
]
```

## Configuração

Você pode publicar o arquivo de configuração usando este comando:

```bash
php artisan vendor:publish --provider="MidiaSimples\PlanCenterSDK\PlanCenterServiceProvider"
```

Um arquivo de configuração chamado `plancenter.php` com alguns padrões sensatos será colocado em seu diretório `config`:

```php
<?php

return [

    /**
     * URL base da API do Plan Center
     */
    'base_url' => env('PLAN_CENTER_BASE_URL'),

    /**
     * Chave secreta de autenticação (token)
     */
    'secret_key' => env('PLAN_CENTER_SECRET_KEY'),

];
```


## Use

Abra seu arquivo .env e adicione sua chave secreta:

```php
PLAN_CENTER_SECRET_KEY=xxxxxxxxxxxxx
```

## Contribuindo

Sinta-se à vontade para fazer um fork deste pacote e contribuir enviando um pull request para aprimorar as funcionalidades.

## License

A Licença MIT (MIT). Consulte [Arquivo de licença](LICENSE.md) para obter mais informações.