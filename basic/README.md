<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

ESTRUTURA DIRETÓRIA
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUISITOS
------------

O requisito mínimo desse modelo de projeto para o servidor da Web suportar o PHP 5.6.0.



INSTALAÇÃO
------------

### Install via Composer


~~~
http://localhost/basic/web/
~~~



CONFIGURAÇÃO
-------------

### Banco de Dados
O arquivo .sql esta na pasta base/db efetue a importação para o seu banco de dados
Edite o arquivo config/db.php com seus dados, por exemplo:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yiidb',
    'username' => 'usuario do seu banco de dados',
    'password' => 'senha do seu banco de dados',
    'charset' => 'utf8',
];
```
