# Hydrator

Uma Trait simples para hidratação e extração de objetos.

## Instalação

No composer.json do seu projeto:

```json
"minimum-stability": "dev",
"prefer-stable": true

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/startup-hurben/Hydrator"
        }
    ],

```

## Uso

Em cada Model:

```php
use App\Abstraction\ModelAbstraction;

class ModelName extends ModelAbstraction
{
    // ...
}
```

Os atributos da Model ("colunas") devem ser declarados como `protected`.

A Abstração da Model tem o seguinte código:

```php
<?php

declare(strict_types = 1);

namespace App\Abstraction;

abstract class ModelAbstraction
{
    use \Hydrator\Hydrator;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }
}
```
