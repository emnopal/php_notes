<?php

# buat property langsung dari constructor

class ConstructorPropertyProduct{
    /*
    # Property:
    // metode tanpa constructor property
    public string $id, $name;
    public int $price, $quantity;
    public function __construct($id, $name, $price, $quantity){
        $this->id = $id;
        ... dst
    }
    */

    // Metode constructor property
    // otomatis di promote ke property
    public function __construct(public string $id,
                                public string $name,
                                public int $price,
                                public int $quantity=1,
                                private bool $isExpensive = false){
    }
}

$product = new ConstructorPropertyProduct(id: "1", name: "Mie Ayam", price: 15000);
var_dump($product);

echo $product->name . PHP_EOL;