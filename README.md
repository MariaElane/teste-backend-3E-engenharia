# Teste Backend 3e Engenharia


## Pré-requisitos
- PHP >= 7.2.5
- Node.js / NPM
- Composer
- Mysql (Preferencialmente)


## Para rodar este projeto
- Clone o repositório
```bash
$ git clone https://github.com/MariaElane/teste-backend-3E-engenharia.git
```
- Instale as dependências do Composer
```bash
$ composer install
```
-  Renomeie o arquivo **.env.example** * para **.env***  e altere o arquivo de acordo com as configurações do seu banco.
> Nesse ponto, é importante que você já tenha criado o banco de dados.

- Gere a chave da aplicação com o comando:
```bash
$ php artisan key:generate
```
- Crie um link simbólico em public/storage que aponta para storage/app/public com o comando:
```bash
$ php artisan storage:link
```
- Instale as dependências do NPM
```bash
$ npm install
```
- Execute as *migrations* das tabelas
```bash
$ php artisan migrate
```
- Por fim, rode o projeto com os comandos:
```bash
$ npm run dev
$ php artisan serve
```

Tudo pronto, agora é só acesssar o sistema pela url: http://localhost:8000/
