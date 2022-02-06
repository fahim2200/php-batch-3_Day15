<?php


namespace App\classes;


class Blog
{
    protected $product;

    public function getAllBlog()
    {
        return [0 => ['title' => 'A new Blog',
            'description' => 'Blog Description',
            'author' => 'Sahabuddin',
            'image' => '2.jpg'],

            1 => ['title' => 'About Bangladesh',
                'description' => 'Blog Description',
                'author' => 'Tonmoy',
                'image' => '1.png'],
            3 => ['title' => 'About Bangladesh',
                'description' => 'Blog Description',
                'author' => 'Rashed',
                'image' => '3.jpeg'],];
    }
}

