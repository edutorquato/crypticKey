## CRYPTICKEY - Password Generator

Este projeto é uma ferramenta administrativa para geração de hashes de senha utilizando diferentes algoritmos criptográficos.

A aplicação permite que o usuário informe uma senha e escolha o tipo de criptografia desejado. Após a geração, o sistema retorna o hash correspondente, que pode ser utilizado para testes, integração com sistemas ou criação manual de registros de autenticação.

### Algoritmos suportados

Atualmente a ferramenta suporta os seguintes tipos de hash:

- Bcrypt (Laravel) – padrão utilizado pelo framework Laravel para armazenamento seguro de senhas.
- MD5
- SHA1
- SHA256
- SHA512
- Objetivo

O objetivo da ferramenta é facilitar a geração rápida de hashes de senha durante o desenvolvimento ou manutenção do sistema, evitando a necessidade de scripts externos ou comandos no terminal.

---

Este projeto foi desenvolvido utilizando **Laravel 12** no backend e **Vue.js 3.4** no frontend, com interface baseada em **Template Material**.

A autenticação é realizada por meio do **Laravel Breeze**, incluindo autenticação tradicional (email e senha) e autenticação social via **Google OAuth**.

Todo o ambiente da aplicação é executado de forma **100% containerizada com Docker**, garantindo padronização, facilidade de configuração e execução do projeto em qualquer ambiente de desenvolvimento.

---

### 🐳 Tecnologias

- **PHP 8.4** — https://www.php.net/
- **Laravel 12** — https://laravel.com/
- **Vue.js 3** — https://vuejs.org/
- **Inertia.js** — https://inertiajs.com/
- **Vuetify** — https://vuetifyjs.com/
- **MySQL 8** — https://www.mysql.com/
- **Docker** — https://www.docker.com/
- **Vite** — https://vitejs.dev/
- **PhpMyAdmin** — https://www.phpmyadmin.net/

### 🚀 Instalação

#### Clonar o projeto
```
git clone https://github.com/edutorquato/crypticKey.git
cd crypticKey
```

#### Criar arquivo .env
```
cp .env.example .env
```

#### Subir containers
```
docker compose up -d --build
```

#### Instalar dependências do projeto
```
docker compose exec app composer install
docker compose exec app npm install
docker compose exec app npm install vuetify
docker compose exec app npm install @mdi/font
```

#### Gerar chave da aplicação
```
docker compose exec app php artisan key:generate
```

#### Criar link de storage
```
docker compose exec app php artisan storage:link
```

#### Rodar migrations e Popular usuários e dados iniciais
```
docker compose exec app php artisan migrate --seed
```

### 🧪 Comandos Úteis

#### Limpar cache
```
docker compose exec app php artisan optimize
```
#### Rodar migrations novamente
```
docker compose exec app php artisan migrate:fresh --seed
```
#### Acessar container
```
docker compose exec app bash
```

### 🌐 Acessos

- Ambiente Local: [http://127.0.0.1:8000](http://127.0.0.1:8000)
- PhpMyAdmin: [http://127.0.0.1:8002](http://127.0.0.1:8002)