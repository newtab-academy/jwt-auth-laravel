<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalacao

Clonar o repositorio

    git clone https://github.com/newtab-academy/jwt-auth-laravel.git

Entrar na pasta do projeto

    cd first-project-laravel

Instalar todas as dependencias via Composer

    composer install

Copiar o arquivo .env.example e fazer as configuracoes necessarias no arquivo .env

    cp .env.example .env

Gerar uma chave para a aplicacao

    php artisan key:generate

Gerar uma chave de autenticação JWT

    php artisan jwt:generate

Executar as migracoes no banco de dados (**defina a conexao com o banco de dados no arquivo .env antes dessa etapa**)

    php artisan migrate

Iniciar o servidor de desenvolvimento local

    php artisan serve

Acessar o servidor em http://localhost:8000

**Lista de comandos**

    git clone https://github.com/newtab-academy/jwt-auth-laravel.git
    cd first-project-laravel
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate
    
**Certifique-se de definir as informacoes de conexao do banco de dados antes de executar as migracoes**

    php artisan migrate
    php artisan serve

Link da documentação no Postman

    https://documenter.getpostman.com/view/16262620/TzeWGTqh
