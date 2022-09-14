<?php

return [

    /**
     * URL base da API do Plan Center
     */
    'base_url' => env('PLAN_CENTER_BASE_URL', 'https://bot.midiasimples.com.br/api/'),

    /**
     * Chave secreta de autenticação (token)
     */
    'secret_key' => env('PLAN_CENTER_SECRET_KEY'),

    /**
     * Nome da aplicação que está consultando ao plan center
     */
    'user_agent' => env('PLAN_CENTER_USER_AGENT', "Plan Center SDK"),

];
