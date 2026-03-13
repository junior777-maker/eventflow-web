# EventFlow Web - Gerenciamento de Eventos 🚀

Este projeto é uma aplicação web completa para a gestão de eventos, desenvolvida para a disciplina de Desenvolvimento Web. O foco foi a implementação de uma arquitetura robusta e dinâmica.

## 📝 Evolução e Dedicação
Após o feedback do **Professor Juan Carlos** em fevereiro, o projeto passou por uma reestruturação profunda. Saímos de um modelo estático (HTML/JSON) e migramos para uma arquitetura profissional baseada em framework. Este processo envolveu noites de estudo intenso para dominar a ferramenta e garantir a persistência real dos dados.

## 🛠️ Tecnologias e Arquitetura
* **Framework:** Laravel 10.x (Padrão MVC - Model View Controller)
* **Linguagem:** PHP 8.x
* **Banco de Dados:** SQL (SQLite)
* **Frontend:** Blade Templates, CSS Moderno e Integração com Leaflet Maps

## 📸 Demonstração do Sistema

### 1. Tela de Login
![Login](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/print-login.png?raw=true)

### 2. Tela de Cadastro de Usuário
![Cadastro de Usuário](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/print-cadastro.png?raw=true)

### 3. Tela Home - Listagem Dinâmica e Mapa (Dados do SQL)
![Home - Listagem de Eventos](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/print-home.png?raw=true)

### 4. Estrutura do Banco de Dados SQLite (Users e Events)
![Banco de Dados](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/print-banco.png?raw=true)

## 📌 Status do Projeto
O sistema já conta com autenticação funcional e listagem dinâmica de eventos consumindo dados reais do banco SQL. Atualmente, estou a trabalhar na finalização do CRUD (implementação dos botões de edição e exclusão de eventos).

## 💻 Como Executar Localmente
1. Instale as dependências: `composer install`
2. Configure o arquivo de ambiente: `cp .env.example .env`
3. Gere a chave da aplicação: `php artisan key:generate`
4. Rode as migrações (para criar as tabelas): `php artisan migrate`
5. Inicie o servidor: `php artisan serve`
