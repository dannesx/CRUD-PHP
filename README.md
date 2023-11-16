![Banner](https://github.com/dannesx/dannesx/blob/master/images/blank-banner.png?raw=true)

<h1 align="center">📊 CRUD PHP 📊</h1>

<div align="center">
    <img src="https://img.shields.io/badge/PHP-777BB4.svg?style=for-the-badge&logo=PHP&logoColor=white" />
    <img src="https://img.shields.io/badge/MySQL-4479A1.svg?style=for-the-badge&logo=MySQL&logoColor=white" />
    <img src="https://img.shields.io/badge/Bootstrap-7952B3.svg?style=for-the-badge&logo=Bootstrap&logoColor=white" />
</div>

## 📃 Sobre o Projeto

Este projeto tem o objetivo de ser um simples template de uma implementação de um sistema CRUD utilizando `PHP PDO Statement`. Segue abaixo um resumo do seu funcionamento e de sua estrutura

## 🧬 Estrutura do Projeto

### Actions

Esta pasta contém apenas as ações que serão feitas relacionadas ao banco de dados. Se o arquivo está nesta pasta, é porque ele se relaciona diretamente ao MySQL.

O arquivo mais importante é o [connDB](actions/connDB.php), responsável por estabelecer as conexões necessárias com o MySQL no código PHP.

Em sequência, temos os arquivos que representam cada uma das letras do CRUD: [create](actions/create.php), [read](actions/read.php), [update](actions/update.php) e [delete](actions/delete.php). Dessa forma conseguimos manter uma certa organização no código, dividindo ações diferentes em arquivos distintos.

> OBS: O arquivo [getByID](actions/getByID.php) retorna apenas um elemento através de sua chave primária `id`

### Database

Este é o backup do banco de dados MySQL, utilizado no exemplo. Use-o para importar o banco de dados e suas tabelas, juntamente com alguns registros de clientes. É apenas um exemplo e pode ser substituído por qualquer outro banco de dados. Note que, se substituir o banco de dados, provavelmente terá que alterar alguns arquivos do projeto, principalmente os arquivos da pasta [actions](#actions).

> Lembre de salvar um backup da estrutura de seu banco de dados dentro do seu projeto

## 📑 Páginas do Projeto

Na raíz do projeto podemos encontrar os arquivos de páginas. 

No arquivo [index](index.php) renderizamos uma tabela de acordo com as informações inseridas no banco. Note os dois links presentes na coluna *Ação* da tabela: são links que enviam a informação `id` (chave primária) via `GET` para os locais adequados

Os arquivos [add](add.php) e [update](update.php) são basicamente formulários para adicionar e atualizar os dados, respectivamente. Note que estes formulários funcionam com o método `POST`

---
Este foi um pequeno resumo para servir de template à futuros projetos que implementem um sistema CRUD na linguagem PHP. Fique à vontade para utilizá-lo de modo livre.

Espero ter contribuído pelo menos um pouco com seu aprendizado! 😁