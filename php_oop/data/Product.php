<?php

class Product {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getPrice() : string
    {
        return $this->price;
    }
}

class Orang {
    protected string $nama;
    protected int $umur;

    public function __construct(string $nama, int $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }
    
}

class Mahasiswa extends Orang {
    private string $npm;
    private string $prodi;

    
}