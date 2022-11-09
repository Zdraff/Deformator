<?php

declare(strict_types=1);

namespace Msmerdov\Deformator;

class Deform {
    public $str;

    public function __construct($str) {
        $this->str = $str;
    }

    public function getDeformedString() {
        $array = preg_split('//u', $this->str);
        shuffle($array);
        return implode('', $array);
    }
}
