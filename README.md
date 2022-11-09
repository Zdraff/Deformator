# Deformator
Пакет для перемешивания букв в строке.

## Установка

```
composer require msmerdov/deformator
```

## Использование

```php
use \Msmerdov\Deformator\Deform;

$str = "Перемешай меня!";
$deformator = new Deform($str);
echo $deformator->getDeformedString();
```
