- Database
```sql
   CREATE TABLE IF NOT EXISTS students (
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(50),
      email VARCHAR(100),
      password VARCHAR(150),
      dob DATE,
      age INT(10),
      city VARCHAR(50),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
      updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );
```

> [!NOTE]
> In Eloquent used table name with Plural and class name with singular.

- config composer 
```shell
composer init
```

- composer.json for psr-4 autoload
```json
"autoload": {
        "psr-4": {
            "App\\": "src"
        }
    },
```

- use when you updated composer.json
```shell
composer dump
```

1. Dependencies
    ```shell
    composer install
    ```
    or

    - install illuminate/database
        ```shell
        composer require illuminate/database
        ```

    - install Symfony Http-Foundation
        ```shell
        composer require symfony/http-foundation
        ```

    - install Symfony VarDumper
        ```shell
        composer require symfony/var-dumper
        ``` 