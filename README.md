# Deformator
Пакет для перемешивания букв в строке.

## Требования
PHP >= 7.4

## Установка

```
composer require msmerdov/deformator
```

## Использование

```php
use \Msmerdov\Deformator\Deform;

$str = "Перемешай меня!";
$deformator = new Deform($str);
echo $deformator->getDeformatedString();
```
