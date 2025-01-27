TUTORIAL TESTE CONECTALA API  

 

Passo 1 - Clone o projeto em sua máquina. 

Comando: git clone git@github.com:diegomaustem/Conectala-API.git 

Passo 2 - Crie o banco localmente em seu SGBD. 

 Comando: CREATE DATABASE conectala_db; 

Passo 3 - Crie o arquivo .env do projeto laravel com as credenciais necessárias para acesso ao seu banco local.  

Exemplo 

DB_CONNECTION=mysql  

DB_HOST=127.0.0.1  

DB_PORT=3306  

DB_DATABASE=conectala_db  

DB_USERNAME=root  

DB_PASSWORD=123456 

Passo 4 - Instale as dependências do projeto na raiz dele.  

Comando: composer install 

 

Passo 5 - Rode as migrations do projeto laravel.  

Comando: php artisan migrate 

Passo 6 - Rode o projeto laravel.  

Comando: php artisan serve 

 

Informações de consumo API. 

Endpoint : http://127.0.0.1:8000/conectala/users 

Verbos  

GET 

Todos usuários cadastrados: http://127.0.0.1:8000/conectala/users 

Um usuário especifico: http://127.0.0.1:8000/conectala/users/{id_user} 

POST 

Inserção de user: http://127.0.0.1:8000/conectala/users  

 

Exemplo de JSON: 

 { "name": "Uncle bob", "email": "bob.cleancode@gmail.com" } 

PUT 

Update de user: http://127.0.0.1:8000/conectala/users/{id_user}  

 

Exemplo de JSON:  

{ "name": "Uncle bob Edit", "email": "bob.cleancode@gmail.com" } 

DELETE: 

Deleção de user: http://127.0.0.1:8000/conectala/users/{id_user} 

 
