## О пакете
Формирование slug для Laravel 5.8

## Установка

composer require zloykolobok/slug

Если необходимо переопределить значения, то выполняем

php artisan vendor:publish

И в config/slug.php меняем соответсвие.

Например:

Знак $ меняем на пустой символ.
```php
    'symbolMap' => [ 
        ...
            '$' => '',
        ...
    ];
```
## Пример использования
```php
    use zloykolobok\slug\Facades\Slug;
```

```php
    $res = Slug::generate('Тест');
```
В результате получим:
```
    test
```