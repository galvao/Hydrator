<?php

declare(strict_types = 1);

namespace Hydrator;

use \Exception;

trait Hydrator
{
    public function hydrate(array $data): void
    {
        $attributes = array_keys(get_object_vars($this));

        foreach ($data as $name => $value) {
            $setter = 'set' . ucfirst($name);

            try {
                ($this)->$setter($value);
            } catch (Exception $e) {
                throw $e;
            }
        }
    }

    public function extract(): array
    {
        return get_object_vars($this);
    }
}
