Backend - API - Conectala

Instruções Iniciais

1 - Clonar o projeto.

    git clone git@github.com:diegomaustem/Conectala-API.git
    
2 - Instalar o composer no projeto.

    composer install

3 - Crie o banco.

    CREATE DATABASE conectala_db;
    
4 - Crie e configure o arquivo .env com as credenciais do banco.

5 - Gere a key da aplicação.

    php artisan key:generate
    
6 - Execute as migrations.

    php artisan migrate
    
7 - Sirva a aplicação.

    php artisan serve
    
Instruções Endpoints

GET 

    Listagem todos usuários - http://127.0.0.1:8000/conectala/users

    Listagem usuário específico - http://127.0.0.1:8000/conectala/users/id_user

POST 

    http://127.0.0.1:8000/conectala/users
    JSON {"name": "Adrielly Lima", "email": "adrielly.lima@gmail.com" } 

PATCH 

    http://127.0.0.1:8000/conectala/users/id_user
    JSON {"name": "Adrielly Lima", "email": "adrielly.lima@gmail.com" }

DELETE 
    
    http://127.0.0.1:8000/conectala/users/3
