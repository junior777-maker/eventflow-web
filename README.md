# EventFlow Web - Gerenciamento de Eventos 🚀

Este projeto é uma aplicação web completa para a gestão de eventos, desenvolvida para a disciplina de Desenvolvimento Web. O foco foi a transição de um modelo estático para uma arquitetura profissional e dinâmica.

## 📝 Evolução e Dedicação
Após o feedback do **Professor Juan Carlos**, o projeto passou por uma reestruturação profunda. Saímos de um modelo básico (HTML/JSON) e migramos para uma arquitetura profissional baseada em framework. Este processo exigiu noites de estudo intenso e muita dedicação para dominar a ferramenta e garantir que o sistema fosse funcional, com persistência real de dados.

## 🛠️ Tecnologias e Arquitetura (Padrão MVC)
Para atender às exigências de organização e profissionalismo, utilizamos:
* **Framework:** Laravel 10.x (Padrão MVC - Model View Controller)
* **Linguagem:** PHP 8.x
* **Banco de Dados:** SQL (SQLite) com tabelas reais
* **Frontend:** Blade Templates, CSS Moderno e Integração com Mapas

## 📸 Demonstração do Sistema

### 1. Telas Principais (Login e Cadastro)
![Login](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/login1.png?raw=true)
![Cadastro](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/cadastrar1.png?raw=true)

### 2. Tela Home - Listagem Dinâmica (Eventos do SQL)
![Home](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/eventos1.png?raw=true)

## 🗄️ Prova de Persistência (Banco de Dados SQL)
Abaixo, as evidências de que o sistema utiliza tabelas SQL reais para usuários e eventos, conforme solicitado:

### Tabela de Eventos (SQLite)
![Tabela de Eventos](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/Print%20da%20Tabela%20de%20Eventos%20(SQL).png?raw=true)

### Tabela de Usuários (SQLite)
![Tabela de Usuários](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/Print%20da%20Tabela%20de%20Usuários%20(SQL).png?raw=true)

### Estrutura MVC no VS Code
![Estrutura MVC](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/Print%20do%20VS%20Code%20(Estrutura%20MVC).png?raw=true)

## 📌 Status Atual do Projeto
O sistema já conta com autenticação funcional e listagem de eventos consumindo dados reais. Atualmente, estou finalizando a implementação completa do CRUD (edição e exclusão).

## 💻 Como Executar Localmente
1. **Instalar dependências:** `composer install`
2. **Configurar Ambiente:** `cp .env.example .env`
3. **Chave de Segurança:** `php artisan key:generate`
4. **Criar Banco de Dados:** `php artisan migrate`
5. **Rodar Servidor:** `php artisan serve`
4. **Criar Banco de Dados:** Execute `php artisan migrate` para criar as tabelas SQL.
5. **Rodar Servidor:** Execute `php artisan serve` e acesse `http://127.0.0.1:8000`.
