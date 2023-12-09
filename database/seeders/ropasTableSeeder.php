<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ropasTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('ropas')->insert([
            [
                'name' => 'Chaqueta Adidas',
                'type' => 'Chaqueta',
                'size' => 'M',
                'color' => 'Gris',
                'description' => 'Chaqueta Adidas talla M de color gris. Buen estado',
                'brand' => 'Adidas',
                'price' => '20.00',
                'image' => 'fotosropa/1.jpg',
            ],
            [
                'name' => 'Chaqueta Nike',
                'type' => 'Chaqueta',
                'size' => 'L',
                'color' => 'Negro',
                'description' => 'Chaqueta Nike talla L de color negro. Buen estado',
                'brand' => 'Nike',
                'price' => '25.00',
                'image' => 'fotosropa/2.jpg',
            ],
            [
                'name' => 'Chaqueta Fila',
                'type' => 'Chaqueta',
                'size' => 'S',
                'color' => 'Negro',
                'description' => 'Chaqueta Fila talla S de color negro. Buen estado',
                'brand' => 'Fila',
                'price' => '23.00',
                'image' => 'fotosropa/3.jpg',
            ],
            [
                'name' => 'Chaqueta Nike',
                'type' => 'Chaqueta',
                'size' => 'L',
                'color' => 'Blanco',
                'description' => 'Chaqueta Nike talla L de color blanco. Buen estado',
                'brand' => 'Nike',
                'price' => '26.00',
                'image' => 'fotosropa/4.jpg',
            ],
            [
                'name' => 'Chaqueta Adidas',
                'type' => 'Chaqueta',
                'size' => 'M',
                'color' => 'Azul',
                'description' => 'Chaqueta Adidas talla M de color azul. Buen estado',
                'brand' => 'Adidas',
                'price' => '24.00',
                'image' => 'fotosropa/5.jpg',
            ],
            [
                'name' => 'Chaqueta Kappa',
                'type' => 'Chaqueta',
                'size' => 'S',
                'color' => 'Negro',
                'description' => 'Chaqueta Kappa talla S de color negro. Buen estado',
                'brand' => 'Kappa',
                'price' => '21.00',
                'image' => 'fotosropa/6.jpg',
            ],
            [
                'name' => 'Chaqueta Tommy Hilfiger',
                'type' => 'Chaqueta',
                'size' => 'L',
                'color' => 'Rojo',
                'description' => 'Chaqueta Tommy Hilfiger talla L de color rojo. Buen estado',
                'brand' => 'Tommy Hilfiger',
                'price' => '35.00',
                'image' => 'fotosropa/7.jpg',
            ],
            [
                'name' => 'Chaqueta Kappa',
                'type' => 'Chaqueta',
                'size' => 'L',
                'color' => 'Gris',
                'description' => 'Chaqueta Kappa talla L de color gris. Buen estado',
                'brand' => 'Kappa',
                'price' => '26.00',
                'image' => 'fotosropa/8.jpg',
            ],
            [
                'name' => 'Chaqueta Adidas',
                'type' => 'Chaqueta',
                'size' => 'M',
                'color' => 'Amarillo',
                'description' => 'Chaqueta Adidas talla M de color amarillo. Buen estado',
                'brand' => 'Adidas',
                'price' => '25.00',
                'image' => 'fotosropa/9.jpg',
            ],
            [
                'name' => 'Chaqueta Fila',
                'type' => 'Chaqueta',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Chaqueta Fila talla M de color negro. Buen estado',
                'brand' => 'Fila',
                'price' => '25.00',
                'image' => 'fotosropa/10.jpg',
            ],

            [
                'name' => 'Camiseta Ellese',
                'type' => 'Camiseta',
                'size' => 'S',
                'color' => 'Blanco',
                'description' => 'Camiseta Ellese talla S de color blanco. Buen estado',
                'brand' => 'Ellese',
                'price' => '10.00',
                'image' => 'fotosropa/11.jpg',
            ],

            [
                'name' => 'Camiseta Nike',
                'type' => 'Camiseta',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Camiseta Nike talla M de color negro. Buen estado',
                'brand' => 'Nike',
                'price' => '12.00',
                'image' => 'fotosropa/12.jpg',
            ],
            [
                'name' => 'Camiseta Adidas',
                'type' => 'Camiseta',
                'size' => 'S',
                'color' => 'Azul',
                'description' => 'Camiseta Adidas talla S de color azul. Buen estado',
                'brand' => 'Adidas',
                'price' => '11.00',
                'image' => 'fotosropa/13.jpg',
            ],

            [
                'name' => 'Camiseta Puma',
                'type' => 'Camiseta',
                'size' => 'L',
                'color' => 'Verde',
                'description' => 'Camiseta Puma talla L de color verde. Buen estado',
                'brand' => 'Puma',
                'price' => '13.00',
                'image' => 'fotosropa/14.jpg',
            ],

            [
                'name' => 'Camiseta Nike',
                'type' => 'Camiseta',
                'size' => 'M',
                'color' => 'Azul',
                'description' => 'Camiseta Nike talla M de color azul. Buen estado',
                'brand' => 'Nike',
                'price' => '12.00',
                'image' => 'fotosropa/15.jpg',
            ],

            [
                'name' => 'Camiseta Kappa',
                'type' => 'Camiseta',
                'size' => 'S',
                'color' => 'Gris',
                'description' => 'Camiseta Kappa talla S de color gris. Buen estado',
                'brand' => 'Kappa',
                'price' => '11.00',
                'image' => 'fotosropa/16.jpg',
            ],

            [
                'name' => 'Camiseta Adidas',
                'type' => 'Camiseta',
                'size' => 'L',
                'color' => 'Verde',
                'description' => 'Camiseta Adidas talla L de color verde. Buen estado',
                'brand' => 'Adidas',
                'price' => '15.00',
                'image' => 'fotosropa/17.jpg',
            ],

            [
                'name' => 'Camiseta Fila',
                'type' => 'Camiseta',
                'size' => 'M',
                'color' => 'Marrón',
                'description' => 'Camiseta Fila talla M de color marrón. Buen estado',
                'brand' => 'Fila',
                'price' => '14.00',
                'image' => 'fotosropa/18.jpg',
            ],

            [
                'name' => 'Abrigo Adidas',
                'type' => 'Abrigo',
                'size' => 'M',
                'color' => 'Rojo',
                'description' => 'Abrigo Adidas talla M de color rojo. Buen estado',
                'brand' => 'Adidas',
                'price' => '35.00',
                'image' => 'fotosropa/19.jpg',
            ],

            [
                'name' => 'Abrigo Nike',
                'type' => 'Abrigo',
                'size' => 'L',
                'color' => 'Azul',
                'description' => 'Abrigo Nike talla L de color azul. Buen estado',
                'brand' => 'Nike',
                'price' => '40.00',
                'image' => 'fotosropa/20.jpg',
            ],

            [
                'name' => 'Abrigo North Face',
                'type' => 'Abrigo',
                'size' => 'L',
                'color' => 'Azul',
                'description' => 'Abrigo North Face talla L de color azul. Buen estado',
                'brand' => 'North Face',
                'price' => '44.00',
                'image' => 'fotosropa/21.jpg',
            ],

            [
                'name' => 'Abrigo Puma',
                'type' => 'Abrigo',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Abrigo Puma talla M de color negro. Buen estado',
                'brand' => 'Puma',
                'price' => '34.00',
                'image' => 'fotosropa/22.jpg',
            ],

            [
                'name' => 'Pantalon Kappa',
                'type' => 'Pantalón',
                'size' => 'L',
                'color' => 'Azul',
                'description' => 'Pantalón Kappa talla L de color azul. Buen estado',
                'brand' => 'Kappa',
                'price' => '27.00',
                'image' => 'fotosropa/23.jpg',
            ],
            [
                'name' => 'Pantalon Nike',
                'type' => 'Pantalón',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Pantalón Nike talla M de color negro. Buen estado',
                'brand' => 'Nike',
                'price' => '24.00',
                'image' => 'fotosropa/24.jpg',
            ],

            [
                'name' => 'Pantalon Nike',
                'type' => 'Pantalón',
                'size' => 'S',
                'color' => 'Blanco',
                'description' => 'Pantalón Nike talla S de color blanco. Buen estado',
                'brand' => 'Nike',
                'price' => '24.00',
                'image' => 'fotosropa/25.jpg',
            ],

            [
                'name' => 'Pantalon Kappa',
                'type' => 'Pantalón',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Pantalón Kappa talla M de color negro. Buen estado',
                'brand' => 'Kappa',
                'price' => '25.00',
                'image' => 'fotosropa/26.jpg',
            ],

            [
                'name' => 'Pantalon Ellese',
                'type' => 'Pantalón',
                'size' => 'S',
                'color' => 'Morado',
                'description' => 'Pantalón Ellese talla S de color morado. Buen estado',
                'brand' => 'Ellese',
                'price' => '23.00',
                'image' => 'fotosropa/27.jpg',
            ],

            [
                'name' => 'Pantalon Adidas',
                'type' => 'Pantalón',
                'size' => 'M',
                'color' => 'Gris',
                'description' => 'Pantalón Adidas talla M de color gris. Buen estado',
                'brand' => 'Adidas',
                'price' => '22.00',
                'image' => 'fotosropa/28.jpg',
            ],

            [
                'name' => 'Pantalon Tommy Hilfiger',
                'type' => 'Pantalón',
                'size' => 'L',
                'color' => 'Azul',
                'description' => 'Pantalón Tommy Hilfiger talla L de color azul. Buen estado',
                'brand' => 'Tommy Hilfiger',
                'price' => '30.00',
                'image' => 'fotosropa/29.jpg',
            ],

            [
                'name' => 'Zapatillas Nike Air Max 90',
                'type' => 'Zapatillas',
                'size' => 'M',
                'color' => 'Blanco',
                'description' => 'Zapatillas Nike Air Max 90 talla M de color blanco. Buen estado',
                'brand' => 'Nike',
                'price' => '80.00',
                'image' => 'fotosropa/30.jpg',
            ],

            [
                'name' => 'Zapatillas Nike Air Jordan',
                'type' => 'Zapatillas',
                'size' => 'S',
                'color' => 'Rojo',
                'description' => 'Zapatillas Nike Air Jordan talla S de color rojo. Buen estado',
                'brand' => 'Nike',
                'price' => '90.00',
                'image' => 'fotosropa/31.jpg',
            ],

            [
                'name' => 'Zapatillas Adidas ADI2000',
                'type' => 'Zapatillas',
                'size' => 'M',
                'color' => 'Negro',
                'description' => 'Zapatillas Adidas ADI2000 talla M de color negro. Buen estado',
                'brand' => 'Adidas',
                'price' => '80.00',
                'image' => 'fotosropa/32.jpg',
            ],

            [
                'name' => 'Zapatillas New Balance 530',
                'type' => 'Zapatillas',
                'size' => 'L',
                'color' => 'Gris',
                'description' => 'Zapatillas New Balance 530 talla L de color gris. Buen estado',
                'brand' => 'New Balance',
                'price' => '70.00',
                'image' => 'fotosropa/33.jpg',
            ],

           
           
            
            
        ]);
    }
}
