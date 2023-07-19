# Preparação do Ambiente

## Criando o banco de dados

```SQL
CREATE DATABASE crud;
USE crud;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    idade int(3) NOT NULL
);
```
## IMPORT BOOTSTRAP CDN

```HTML
<!-- IMPORT BOOTSTRAP ICONS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- IMPORT BOOTSTRAP CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- JAVASCRIPT IMPORT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
```

## CRIAR PASTA INCLUDES

Separar para deixar o codigo php separado do HTML.

1. criar `includes/header.php` e `includes/footer.php`
2. Importar os arquivos no `index.php`

```php
<?php
include_once './includes/header.php';
include_once './includes/footer.php';
```
