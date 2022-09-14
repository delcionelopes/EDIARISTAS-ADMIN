<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto
Este é um projeto feito em Laravel que faz parte do sistema administrativo da plataforma e-Diaristas desenvolvido no curso Multi-stack da Treinaweb.

## Instalando o projeto

### Clonar o projeto

<pre>
git clone https://github.com/delcionelopes/EDIARISTAS-ADMIN.git
</pre>

#### Instalar as dependências

<pre>
composer install
</pre>

Ou em ambiente de desenvolvimento

<pre>
composer update
</pre>

#### Criar o arquivo de configuração de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto. Configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura do banco de dados

<pre>
php artisan migrate
</pre>

#### Criar o usuário inicial

<pre>
php artisan db:seed

//usuário criado: admin@admin.com  senha: 123mudar
</pre>

#### Iniciar o servidor de desenvolvimento

<pre>
php artisan serve
</pre>

## Desenvolvimento

Este trabalho foi desenvolvido por Delcione Lopes da Silva durante o treinamento Multi-stack da Treinaweb. Se desejar entrar em contato envie um e-mail para Delcione Lopes via [delcionelopes@gmail.com](mailto:delcionelopes@gmail.com). 

## Licença

Este trabalho é livre. Utilize da melhor forma possível. Obrigado.
