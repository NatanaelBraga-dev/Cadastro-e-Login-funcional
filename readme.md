<h2>Requisitos para rodar o projeto</h2>

1. ter um ambiente de desenvolvimento como Virtual Studio Code <br>
    |- *Para que se possa executar os códigos*

2. ter o Xampp instalado <br>
    |- *Para rodar o apache e o MySql*

3. ter MySql workbanch <br>
    |- *Para podermos construir o banco de dados*

<h2>O que é esse projeto ?</h2>

*Esse projeto se trata da construção de telas funcinonais de cadastro e login <br> do usuario, com o objetivo de treinar minhas habilidades técnincas em <br> tecnologias como:*

 1. HTML5
 2. CSS3
 3. PHP
 4. MYSQL
 5. JAVASCRIPT

<h2>Instruções:</h2>

<h4>1. Baixar a pasta do projeto e abri-la no ambiente de desenvolvimento</h4>

<h4>2. Criar o banco de dados no MySql Workbanch, copie os códigos a seguir e execute no software</h4>

1. create database Projeto_Cadastro_E_Login; <br>
    |- *Cria o banco de dados*
2. use projeto_cadastro_e_login; <br>
    |- *Seleciona o banco de dados que vamos usar*
3. create table usuarios(
    id int not null auto_increment primary key, <br>
    nome_usuario varchar(110) not null, <br>
    cpf varchar(45) not null, <br>
    email_usuario varchar(255) not null, <br>
    senha usuario(200) not null 
) <br>
    |- *Cria a tabela onde ficarão as informações*

5. select * from usuarios; <br>
    |- *mostra todos os dados cadastrados na tabela*

<h4>3. Colocar a pasta do projeto na pasta htdocs do Xampp</h4>

<h4>4. digitar o endereço da pasta dentro do navegador</h4>
<h5>Ex:C:\xampp\htdocs\ProjetoLoginECadastro<h5>
<h4>5. Substituir tudo que vem antes da pasta do projeto por localhost\ e colocar o nome do arquivo após a pasta<h4>

<h5>Ex: localhost\ProjetoLoginECadastro\cadastro.php</h5>

<h4>6. Agora aperte Enter para rodar o projeto</h4>
