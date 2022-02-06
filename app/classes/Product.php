<?php


namespace App\classes;


class Product
{
    protected $products;

    public function getAllProduct()
    {
        return [
            0 => [
                '#Id'           => '1',
                'title'         => 'Product 1',
                'price'         => '10200tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Bitcoin',
                'category'      => 'Blockchain',
                'image'         => 'bit1.jpg'
            ],
            1 => [
                '#Id'           => '2',
                'title'         => 'Product 2',
                'price'         => '20500tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Bitcoin',
                'category'      => 'Blockchain',
                'image'         => 'bit2.jpg'
            ],
            2 => [
                '#Id'           => '3',
                'title'         => 'Product 3',
                'price'         => '10200tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Bitcoin',
                'category'      => 'Blockchain',
                'image'         => 'bit3.jpg'
            ],
            3 => [
                '#Id'           => '4',
                'title'         => 'Product 4',
                'price'         => '10200tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Bitcoin',
                'category'      => 'Blockchain',
                'image'         => 'p2.jpg'
            ],
            4 => [
                '#Id'           => '5',
                'title'         => 'Product 5',
                'price'         => '2500 Tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Watch',
                'category'      => 'Us Navy',
                'image'         => 'p2.jpg'
            ],
            5 => [
                '#Id'           => '6',
                'title'         => 'Product 6',
                'price'         => '1000tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Boss',
                'category'      => 'Headphone',
                'image'         => 'p2.jpg'
            ],
            6 => [
                '#Id'           => '7',
                'title'         => 'Product 7',
                'price'         => '1200tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Apple Watch',
                'category'      => 'Watch',
                'image'         => 'p3.jpg'
            ],
            7 => [
                '#Id'           => '8',
                'title'         => 'Product 8',
                'price'         => '70000tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Sony',
                'category'      => 'Canera',
                'image'         => 'p3.jpg'
            ],
            8 => [
                '#Id'           => '9',
                'title'         => 'Product 9',
                'price'         => '2000tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Gucci',
                'category'      => 'Sunglasses',
                'image'         => 'p3.jpg'
            ],
            9 => [
                '#Id'           => '10',
                'title'         => 'Product 10',
                'price'         => '5000tk',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet tincidunt arcu, vitae molestie nibh placerat in. Nunc ut mauris bibendum, ullamcorper quam id, placerat diam. In fermentum eros cursus tortor mollis vulputate. Aenean semper sem ante. Fusce cursus eros nec arcu condimentum volutpat. Fusce cursus ex id diam suscipit, ut molestie leo commodo. Sed nec elit a lectus fringilla eleifend at sit amet justo. Curabitur elementum malesuada lacus quis convallis. Proin varius magna at nisl blandit suscipit. In faucibus sollicitudin libero ut porttitor. Etiam lobortis, augue nec tincidunt consequat, est neque convallis neque, nec auctor velit nunc et ipsum.',
                'brand'         => 'Nike',
                'category'      => 'Shoes',
                'image'         => 'p6.jpg'
            ],
        ];
    }
}