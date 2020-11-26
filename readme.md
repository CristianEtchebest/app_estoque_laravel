## CRUD de produtos com Laravel 5.8
###### Sistema de CRUD completo com listagem de produtos cadastrados, atualização dos produtos, registro e exclusão. Formulário dispões de campo de pesquisa simples.

------------

###Processo de instalação Windows:
####Softwares
* Instalar composer ([instalador Composer](https://getcomposer.org/Composer-Setup.exe "instalador Composer"))
* Instalar Git ([Instalador GIT](https://git-scm.com/download/win "Instalador GIT"))
* Instalar XAMPP ([Instalador XAMPP](https://www.apachefriends.org/xampp-files/7.4.12/xampp-windows-x64-7.4.12-0-VC15-installer.exe "Instalador XAMPP"))

####Comandos básicos utilizando o Git Bash
` mkdir projeto`

`cd projeto/`

 `composer create-project laravel/laravel app_estoque_laravel`
 
`cd app_estoque_laravel/`

`git init`

>`mysql -u root -p
create database db_estoque_laravel;
quit`

> Edite o arquivo o .env e altere as seguintes configurações:
* DB_DATABASE=db_estoque_laravel
* DB_USERNAME=root
* DB_PASSWORD=Suporte99

`cp .env.example .env`

`php artisan key:generate`

`php artisan migrate`

`php artisan db:seed`

`php artisan serve`

![Laravel]
