Convencoes
=======

##Configuracoes basicas
base url

##Rotas
As rotas sao convencionadas a seguir o padrao:
http://localhost/seuprojeto/<CONTROLADOR>/<ACAO>

O noopmvc utiliza o padrao Front Controller, isso significa que todas as requisicoes (uma requisicao eh qualquer chamada para algum recurso do seu site) vao ser atendidas pelo mesmo arquivo, no caso o arquivo index.php. Ele sera responsavel por tratar essa requisicao e repassar para o controlador especifico que vai lidar com aquela requisicao. Voce nao deve alterar o arquivo index.php a menos que tenha certeza absoluta do que esta fazendo.

Por exemplo:
Uma requisicao tipo GET para a URL http://localhost/seuprojeto/usuario sera tratada e estara esperando como padrao um arquivo obrigatoriamente armazenado na pasta `controladores` na raiz do projeto e com o nome `usuarioControlador.php`. Voce deve seguir obrigatoriamente seguir essa convencao!. Perceba que quando fazemos a