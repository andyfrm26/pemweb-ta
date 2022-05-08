<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
{
    public $name;
    public $price;
    public $image;

    public function __construct($title, $price, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.product-card');
    }
}
