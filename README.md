# EventFlow Web - Gerenciamento de Eventos

Este projeto é uma aplicação web desenvolvida para a disciplina de Desenvolvimento Web, focada na gestão e visualização de eventos. 

## 🚀 Evolução do Projeto
Seguindo o feedback do Professor Juan Carlos, o projeto foi totalmente reestruturado. Saímos de uma versão estática (HTML/JSON) para uma aplicação robusta utilizando o framework **Laravel**.

## 🛠️ Tecnologias Utilizadas
* **Framework:** Laravel (Padrão MVC)
* **Linguagem:** PHP
* **Banco de Dados:** SQL (SQLite)
* **Frontend:** Blade Templates & CSS Customizado

## 📌 Funcionalidades Atuais
* Autenticação completa (Login e Registro de Usuários no Banco de Dados).
* Listagem dinâmica de eventos consumindo dados do SQL.
* Estrutura de rotas organizada.
* [EM DESENVOLVIMENTO] Edição e Exclusão de eventos (CRUD).

## 💻 Como rodar o projeto localmente
1. Após clonar, instale as dependências: `composer install`
2. Configure o ambiente: `cp .env.example .env`
3. Gere a chave: `php artisan key:generate`
4. Rode as migrações do banco: `php artisan migrate`
5. Inicie o servidor: `php artisan serve`
