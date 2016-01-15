Yii 2 Advanced API Template
===============================

Yii 2 Advanced API Template is a skeleton [Yii 2](http://www.yiiframework.com) application best for complex
API applications with multiple tiers.

The template includes two tiers: api and console, each of which is a separate Yii application.

The template is designed to work in a team development environment. 
It supports deploying the application in different environments.

INSTALLATION
------------

## Install via Composer

Run the [Composer](http://getcomposer.org) commands to install:

```bash
composer global require fxp/composer-asset-plugin ~1.1.1
composer create-project --prefer-dist frostealth/yii2-api-advanced my-api
```

## Preparing application

After you install the application, you have to copy the `.env.example` file to `.env` and fill-in their own values.

DIRECTORY STRUCTURE
-------------------

```
common
    config/                  contains shared configurations
    mail/                    contains view files for e-mails
    models/                  contains model classes used in both console and api
console
    config/                  contains console configurations
    controllers/             contains console controllers (commands)
    migrations/              contains database migrations
    models/                  contains console-specific model classes
    runtime/                 contains files generated during runtime
api
    config/                  contains api configurations
    common/
        controllers/         contains shared api-specific controllers
        models/              contains shared api-specific model classes
    runtime/                 contains files generated during runtime
    versions/                contains api versions as modules
        v1/
            controllers/     contains version-specific controllers
            models/          contains version-specific model classes
    web/                     contains the entry script
vendor/                      contains dependent 3rd-party packages
```
