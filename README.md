# banco_dado


a pagina 
### config.php
esta a conexao com o banco de dados,
acessando o localhost: 'Localhost', 
o usuario padrao:'root'
, a senha:''
, e o nome do banco:'formulario_db'
a ser acessado
, depois foi criado um conexao com msql inglobando todos esses dados

<hr>

a pagina

### formulario.php
comeca com um codigo php, que faz o POST, ou seja ele adiciona o formulario no banco de dados , pela pela config.php
depois adiciono todos os dados do formulario em variaveis, para poder ,fazer a conexao e inserir os dados e  os valores no banco de dados na tabela usuario
 e depois disso você será redirecionado para a pagina de sistema.php
 
 #### logo abaixo no formulario tem todo o html e css que é precisso pra deixa a aplicação bonitinha
 
 <hr>
a pagina
 
### index.php
 é a pagina inicial que te leva para o cadastro ou para o banco de dados
 
 
 <hr>
a pagina
 
### sistema.php
 é a sessão aonde vai ser mostrado todos os usuario do banco de dados e tembem a barrinha de pesquisa podendo ser acessado pelo id, name, ou email
 
 primeiro acessamos o msql na pagina config.php
 e depois fazemos uma verificao e se nao estivermos fazendo uma pesquisa
 a tabela ira retornar todos os usuarios cadastrado no banco de dados
 
 senao ele ira retornar o usuario passado no input
 
 e entao ele mostra o resultado da conexao do banco de dados
 
 logo abaixo temos quase todo html e css preciso  um tabela para mostrar os dados e um loop que mostra um amatriz do banco de dados com todos os dados que for passado no echo para renderiza na tela
 
 
 por fim no final do body adicionei um script para criar a funcao de pesquisa que acessa o input  pelo id pesquisa e , nessa funcao pega o valor que foi digitado nele ,e entao podemos apertar o botao pesquisar ou tambem pelo botao 'entao' que foi feita uma logica para adicionar um evento sobre o teclado
