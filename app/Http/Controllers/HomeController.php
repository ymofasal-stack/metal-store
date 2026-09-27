<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = $this->getMockProducts();

        return view('home.index', [
            'featuredProducts' => $featuredProducts,
        ]);
    }

    /**
     * Temporary mock data.
     * Shape matches the future Product model attributes
     * (name, price, old_price, image, category, rating)
     * so the Blade markup won't need to change when we swap
     * this for a real Eloquent query.
     */
    private function getMockProducts(): array
    {
        return [
            [
                'name' => 'Titanium Chrono',
                'price' => 249.00,
                'old_price' => 299.00,
                'image' => 'assets/images/products/product-1.jpg',
                'category' => 'Watches',
                'rating' => 4.5,
            ],
            [
                'name' => 'Steel Link Bracelet',
                'price' => 89.00,
                'old_price' => null,
                'image' => 'assets/images/products/product-2.jpg',
                'category' => 'Accessories',
                'rating' => 4.0,
            ],
            [
                'name' => 'Carbon Runner',
                'price' => 159.00,
                'old_price' => 189.00,
                'image' => 'assets/images/products/product-3.jpg',
                'category' => 'Footwear',
                'rating' => 5.0,
            ],
            [
                'name' => 'Matte Grip Belt',
                'price' => 59.00,
                'old_price' => null,
                'image' => 'assets/images/products/product-4.jpg',
                'category' => 'Lifestyle',
                'rating' => 4.2,
            ],
        ];
    }
}

