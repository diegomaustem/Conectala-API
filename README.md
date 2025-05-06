Backend - API - Conectala

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
