<?php
// models/Pizza.php

class Pizza {
    private $name;
    private $size;
    private $sabores;
    private $telefone;

    public function __construct($name, $size, $sabores, $telefone = '') {
        $this->name = $name;
        $this->size = $size;
        $this->sabores = $sabores;
        $this->telefone = $telefone;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getSabores() {
        return $this->sabores;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}
