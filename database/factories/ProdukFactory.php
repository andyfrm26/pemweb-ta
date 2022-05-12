<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdukFactory extends Factory
{
    protected $model = \App\Models\Produk::class;
    
    public function definition()
    {
        return [
            'nama' => 'Product '.rand(1, 10),
            'foto' => '',
            'deskripsi' => 'Lorem ipsum dolor sit amet',
            'harga' => 10000,
            'jumlah' => rand(50, 200),
            'terjual' => rand(10, 50)
        ];
    }
}
