<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cadastro de Usuários

Painel Simples para cadastro de usuário com seu respectivo endereço;
![image](https://user-images.githubusercontent.com/55820071/161369442-d02e7458-2601-4716-b0b8-df19022ee480.png)

## Instação

- Clone o repositorio
```
https://github.com/thiagomagn0/user_semge.git
```

- Access directory
```
$ cd user-semge
```

- Copie `.env.example` para `.env` e faça suas confirações de banco
```
$ cp .env.example .env
```

- Instale todas as dependencias ([composer](http://getcomposer.org))
```
$ composer install ou compoer update
```

- Gere uma nova key
```
$ php artisan key:generate
```

- Rode as migrates e seeds
```
$ php artisan migrate --seed && php artisan db:seed
```

## Statar o Serviço

```
$ php artisan serve
```

- *user: root@semge.com.br
- *password: 123mudar



## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
