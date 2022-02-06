<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 => [
                'title'         => 'A new Blog',
                'description'   => 'Blog Description',
                'author'        => 'shofiullah',
                'image'         => 'bit1.jpg'
            ],
            1 => [
                'title'         => 'A new Blog 1',
                'description'   => 'Blog Description 1',
                'author'        => 'rafiq',
                'image'         => 'bit2.jpg'
            ],
            2 => [
                'title'         => 'About Bangladesh',
                'description'   => 'Blog Description',
                'author'        => 'nuru',
                'image'         => 'bit3.jpg'
            ],
            3 => [
                'title'         => 'About trending blog',
                'description'   => 'Blog Description sdfskdfasdfgiausdf',
                'author'        => 'ehasan',
                'image'         => 'bit4.jpg'
            ],

        ];
    }
}