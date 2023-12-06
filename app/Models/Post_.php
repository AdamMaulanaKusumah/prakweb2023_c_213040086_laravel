<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "tittle" => "First Post",
            "slug" => "first-post",
            "author" => "Adam",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quibusdam natus repudiandae voluptatem vero saepe perspiciatis amet porro velit, optio dolores excepturi sint nisi corporis recusandae, totam repellendus aut corrupti."
        ],
        [
            "tittle" => "Second Post",
            "slug" => "second-post",
            "author" => "Ica",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et necessitatibus velit deleniti sunt in est explicabo magnam corrupti quo iusto laudantium, architecto nam aliquam omnis accusamus laboriosam numquam officia perferendis animi. Reiciendis error obcaecati tenetur officiis quas quidem, quos iusto, enim nobis est nostrum dolores quis vero harum cum dicta eum qui fugit sequi deleniti! Nulla molestiae et cupiditate in! Eius debitis provident beatae incidunt, perferendis, minima maxime earum blanditiis cupiditate quas aliquid error impedit! Maiores accusantium fugit obcaecati commodi, provident accusamus vitae blanditiis beatae modi deleniti iste. Vel officiis nisi distinctio, a reprehenderit dignissimos animi perspiciatis magni consequatur illo."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //$post = [];
        //foreach ($posts as $p) {
        //    if ($p['slug'] === $slug) {
        //        $post = $p;
        //    }
        //}
        return $posts->firstWhere('slug', $slug);
    }
}
