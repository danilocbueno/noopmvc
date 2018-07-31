Convencoes
=======

## Estrutura do projeto
    A estrutura do projeto é ilustrada abaixo:
    dist/
    ├── bibliotecas/
    │   ├── alert.php
    │   ├── auth.php
    │   ├── mysqli.php
    │   ├── utils.php
    │   └── view.php
    └── controlador/
    │   ├── usuarioControlador.php
    │   └── loginControlador.php
    └── modelo/
    │   └── usuarioModelo.php
    └── publico/
    │   ├── css/
    |   |   └── app.css
    │   └── js/
    |      └── app.js
    └── servicos/
    |    ├── correiosServico.php
    |    └── bootstrap.min.js.map
    └── visao/
    │   ├── login/
    |   |   └── index.view.php
    │   ├── usuario/
    |   |   ├── formulario.view.php
    |   |   ├── listar.view.php
    |   |   └── visualizar.view.php
    |   ├── cabecalho.php
    |   └── template.php
    ├── .htaccess
    ├── app.php
    ├── index.php
    └── readme.md


O framework utiliza o padrão arquitetural MVC, logo sua estrutura está baseada neste padrão apresentando os três principais objetos da arquitetura, a pasta `modelo`, `controlador` e `visao`. 

## Configuracoes basicas
base url

## Rotas
As rotas sao convencionadas a seguir o padrao:
`http://localhost/seuprojeto/<CONTROLADOR>/<ACAO>`

O noopmvc utiliza o padrao Front Controller, isso significa que todas as requisicoes (uma requisicao eh qualquer chamada para algum recurso do seu site) vao ser atendidas pelo mesmo arquivo, no caso o arquivo index.php. Ele sera responsavel por tratar essa requisicao e repassar para o controlador especifico que vai lidar com aquela requisicao. Voce nao deve alterar o arquivo index.php a menos que tenha certeza absoluta do que esta fazendo.

Por exemplo:
Uma requisicao tipo GET para a URL http://localhost/seuprojeto/usuario sera tratada e estara esperando como padrao um arquivo obrigatoriamente armazenado na pasta `controladores` na raiz do projeto e com o nome `usuarioControlador.php`. Voce deve seguir obrigatoriamente seguir essa convencao!. Perceba que quando fazemos a