<?php

declare(strict_types=1);

namespace Msmerdov\Deformator;

class Deform {
    public string $str;

    public function __construct(string $str) {
        $this->str = $str;
    }

    public function getDeformatedString() {
        return implode('', array_rand(str_split($this->str)));
    }
}
