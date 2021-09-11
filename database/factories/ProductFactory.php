<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = mt_rand(1,99999);
        while(Product::where('product_id', $id)->exists()){
            $id = mt_rand(1,99999);
        }

        return [
            'product_id' => $id,
            'name'=> $this->faker->word(),
            'description'=> $this->faker->paragraph(10),
            'price'=> $this->faker->randomNumber(7),
            'stock'=>$this->faker->randomNumber(3),
            'supplier'=> 1 ,
            'market' => 1 ,
            'category' => 1
        ];
    }
}
