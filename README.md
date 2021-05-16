# laravel-sem-medo

Laravel versao 8
Doc: https://laravel.com
HTML/CSS desse projeto: https://gitlab.com/danilomsampaio/laravel-do-zero/-/tree/master/
Video aula base desse projeto: https://www.youtube.com/watch?v=_S0BtAwCY14

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

RECOMENDADO: Criar uma branch Develop a partir da Main

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


RECOMENDADO: Criar uma branch para a criação de Rotas, Views e Controllers a partir de Develop


Passo 1: Configurar as rotas em: app/routes/web.php
1. O que é?
- Rota é o caminho do navegador até o Controller    
2. Como funciona?
- Ao digitar a rota no navegador, a página exibida passará a ser referente àquela rota;
- O controller retornará uma view (tela que usuário vai enxergar)

Passo 2: Criar o controller 
RECOMENDADO: criar uma pasta dentro de Controllers para melhor organização
1. $ php artisan make:controller nome-do-controller --tipo-do-controller ou
$ php artisan make:controller PastaCriadaPorVoce/nome-do-controller --tipo-do-controller ou
obs: para indentificar os tipos de controller, basta digitar --help no lugar do tipo
2. O arquivo de Controller será criado automaticamente em app/Http/Controllers ou app/Http/Controllers/PastaCriadaPorVoce

Passo 3: Colocar a view no controller (app/Http/Controllers)
1. No arquivo do seu novo controller, terá uma function criada automaticamente, onde deve ser configurada a view
Exemplo:
public function __invoke(Request $request)
    {
        return view('site\blog\index');
    }

Passo 4: Criar as paginas de view
1. Dentro da pasta Views deve-se criar o arquivo view da rota criada. Exemplo: index.blade.php
RECOMENDADO: criar uma pasta para cada pagina do site, e dentro de cada pasta criar as views pertinentes àquela página
2. Dentro dessa view criada, será feito o HTML daquela page

RECOMENDADO: Dar merge entre Develop e Rotas-controller-view

RECOMENDADO: Criar uma branch assets-frontend-estatico a partir de Develop

Passo 5: Criar pasta de layout
1. Dentro de views pode-se criar uma pasta chamada 'layouts'

Passo 6: Criar o layout genérico
Existem partes do site que será igual em todas as páginas, como header, nav e footer, então não precisamos ficar sempre repetindo elas.
1. Dentro de layouts, criar o arquivo site.blade.php e dentro dele, 
2. Criar a estrutura inicial de HTML5,
3. Criar o menu e o footer (e qlqr parte do site que se repetirá em todas as páginas),
4. Onde for o conteúdo que irá alterar, colocar @yield('content') no lugar (yield, é uma espécie de slot)

Passo 7: Organizando as paginas
Dentro do index.blade.php da pasta de cada page:
1. Antes de acrescentar o conteúdo, colocar no inicio da página:
@extends('layouts.site') //puxa tudo que foi feito em site.blade.php
@section('content') //aqui inicia o conteudo exlusivo daquela page, onde está o @yield
@endsection //finaliza o conteúdo

Passo 8: Criando e importando CSS
1. O CSS deve sempre ficar dentro da pasta public, então dentro de public cria-se a pasta css
2. Dentro da pasta css, criar o arquivo app.css
3. Para importar o CSS, deve-se colocar: 
<link rel="stylesheet" href="{{asset('css/app.css')}}">

Obs1: Importando JS
1. Deve-se usar asset, assim como CSS
Exemplo:
<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>

Obs9: Importando imagens
1. Deve-se usar asset, assim como CSS
Exemplo:
<img src="{{asset('images/Asset 1.svg')}}">

Passo 9:
1. Acrescentar o conteúdo dentro de cada página, dentro da section content

RECOMENDADO: Dar merge entre Develop e assets-frontend-estatico



