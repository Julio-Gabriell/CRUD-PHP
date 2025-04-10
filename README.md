# CRUD-PHP

Este repositório contém um exemplo simples de aplicação CRUD (Create, Read, Update, Delete) desenvolvida em PHP, demonstrando as operações básicas de gerenciamento de dados com banco de dados MySQL.

## 🔧 Funcionalidades

- ✅ Criar novos produtos
- 📖 Ler e listar os produtos existentes
- ✏️ Atualizar produtos
- ❌ Excluir produtos

## 🛠 Tecnologias Utilizadas

- **PHP** – Lógica da aplicação
- **MySQL** – Banco de dados
- **HTML5 & CSS3** – Estrutura e estilo
- **Bootstrap 5** – Estilo responsivo e moderno

## 📁 Estrutura de Arquivos

- `index.php` – Página inicial com listagem de produtos
- `criar.html` – Form para adicionar novo produtos
- `editar.html` – Form para editar um produtos
- `deletar.html` – Form para deletar um produtos
- `criar.php` – Script para adicionar novo produtos
- `editar.php` – Script para editar um produtos
- `deletar.php` – Script para deletar um produtos
- `conn.php` – Conexão com o banco de dados

  ## 🚀 Como Rodar o Projeto com Laragon

### ✅ Pré-requisitos

- [Laragon](https://laragon.org/) instalado  
- Projeto clonado ou descompactado em sua máquina  
- Editor de código (recomendado: VS Code)

### 🗂️ 1. Mover o Projeto para a Pasta do Laragon

Coloque a pasta do projeto dentro do diretório `www` do Laragon:

### 🔌 2. Iniciar o Laragon

1. Abra o Laragon  
2. Clique em **"Start All"** para iniciar os serviços  
3. O Apache e MySQL devem estar ativos

### 🗃️ 3. Criar o Banco de Dados

1. Acesse o phpMyAdmin:  
   👉 [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

2. Crie um banco de dados com o nome que está em `conn.php`  
   *(Ex: `aulas_php`)*

3. Importar a estrutura do banco:  
   - Vá na aba **Importar**  
   - Envie o arquivo `.sql` do projeto (se houver)  
   - Clique em **Executar**

### ⚙️ 4. Verificar Configuração do `conn.php`

Confira se o arquivo `conn.php` está configurado corretamente:

```php
<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dataBase = "php_aulas";

    $conn = new mysqli($host, $usuario, $senha, $dataBase);

    if ($conn->connect_error){
        die("Erro :" . $conn->connect_error);
    }
?>
```

## 🌐 5. Acessar o Projeto
Abra o navegador e digite:

http://localhost/CRUD-PHP/

## 🎉 Pronto!
Agora você pode:

Cadastrar novos produtos

Visualizar e listar todos os produtos

## 🧑‍💻 Autor
Feito com 💻 por Julio Gabriel Paes Pinto

## 📃 Licença
Este projeto está sob a licença MIT – sinta-se à vontade para usá-lo como base!
