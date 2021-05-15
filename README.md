# laravel-sem-medo

Para criar o projeto após instalações:
- laravel new laravel-sem-medo

Resumo da Estrutura:
PASTAS/ARQUIVOS:
- app: coração do projeto
- bootstrap: inicialização do framework laravel
- config: arquivos de configração do projeto
- database/factories: popular o banco de dados para teste e dados ficticios
- database/migrations: versionar o banco de dados
- database/seeds: popular o banco de dados
- public: entrata do projwto php
- resources: assets
- routes: arquivos de todas >> web.php
- storage: guarda informações
- tests: realizar testes unitários
- vendor: pacotes instalados
- .env: conf do ambiente


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

Passo 1: Configurar as rotas em: routes/web.php
1. O que é?
- Rota é o caminho do navegador até o Controller    
2. Como funciona?
- Ao digitar a rota no navegador, passará pelo arquivo routes/web.php;
- Depois irá para um método dentro do controlador (Http/Controllers/Controller.php);
- O controller retornará uma view (tela que usuário vai enxergar)

Passo 2: Criar o controller 
1. $ php artisan make:controller nome-do-controller --tipo-do-controller
obs: para indentificar os tipos de controller, basta digitar --help no lugar do tipo

Passo 3: Colocar a view no controller
1. Ao criar o controller, terá uma function criada automaticamente, dentro deve ser configurada a view