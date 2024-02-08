# Rest API Laravel

- PHP 
- Composer

## Instalação. 

1. Instale as dependências PHP usando o Composer:
```bash
composer install
```

2. Crie um arquivo `.env` baseado no arquivo `.env.example` e configure as variáveis de ambiente, incluindo o seguinte para utilizar o SQLite:
```plaintext
DB_CONNECTION=sqlite
```

3. Execute o comando `touch database/database.sqlite` para criar o arquivo de banco de dados SQLite.


4. Execute as migrações do banco de dados para criar as tabelas necessárias:

   ```bash
   php artisan migrate
   ```

5. Popular nosso banco de dados.
```bash
php artisan db:seed
```

6. Subir aplicação.
```
php artisan serve
```
