# EventFlow Web - Gerenciamento de Eventos 🚀

Este projeto é uma aplicação web completa para a gestão de eventos, desenvolvida para a disciplina de Desenvolvimento Web. O foco foi a transição de um modelo estático para uma arquitetura profissional e dinâmica.

## 📝 Evolução e Dedicação
Após o feedback do **Professor Juan Carlos**, o projeto passou por uma reestruturação profunda. Saímos de um modelo básico (HTML/JSON) e migramos para uma arquitetura profissional baseada em framework. Este processo exigiu noites de estudo intenso e muita dedicação para dominar a ferramenta e garantir que o sistema não fosse apenas visual, mas funcional, com persistência real de dados.

## 🛠️ Tecnologias e Arquitetura (Padrão MVC)
Para atender às exigências de organização e profissionalismo, utilizamos:
* **Framework:** Laravel 10.x (Padrão MVC - Model View Controller)
* **Linguagem:** PHP 8.x
* **Banco de Dados:** SQL (SQLite) com tabelas reais
* **Frontend:** Blade Templates, CSS Moderno e Integração com Leaflet Maps

## 📸 Demonstração do Sistema

### 1. Tela de Login
![Login](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/login1.png?raw=true)

### 2. Tela de Cadastro de Usuário
![Cadastro](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/cadastrar1.png?raw=true)

### 3. Tela Home - Listagem Dinâmica (Dados vindos do SQL)
![Home](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/eventos1.png?raw=true)

### 4. Estrutura de Tabelas no Banco de Dados (SQLite)
![Banco de Dados](https://github.com/junior777-maker/eventflow-web/blob/master/public/img/Print%20do%20VS%20Code%20(Estrutura%20MVC).png?raw=true)

## 📌 Status Atual do Projeto
O sistema já conta com autenticação funcional (Login/Registro) e listagem de eventos consumindo dados reais do banco SQL. Atualmente, estou finalizando a implementação completa do CRUD (botões de edição e exclusão).

## 💻 Como Executar Localmente
Para que o sistema funcione corretamente em sua máquina, siga estes passos:
1. **Instalar dependências:** No terminal, execute `composer install`.
2. **Configurar Ambiente:** Duplique o arquivo `.env.example` e renomeie para `.env`.
3. **Chave de Segurança:** Execute `php artisan key:generate`.
4. **Criar Banco de Dados:** Execute `php artisan migrate` para criar as tabelas SQL.
5. **Rodar Servidor:** Execute `php artisan serve` e acesse `http://127.0.0.1:8000`.
