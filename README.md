# laravel-sem-medo

Para criar o projeto após instalações:
- laravel new laravel-sem-medo

Ajustando as configurações de banco de dados (após a criação do mesmo):
- Em .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_sem_medo
DB_USERNAME=root
DB_PASSWORD=
//Essas informações podem variar de acordo com o banco de dados escolhido
- Abrir terminal para testar funcionalidade do banco de dados, digitando:
 $ php artisan tinker
O comando deve retornar POD com informações, caso apareça PDOException, deve-se fazer algum ajuste
