<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::create([
        //    'name' => 'Chandra Arcychan Azfar',
        //    'email' => 'chandraarcychan@gmail.com',
        //    'password' => bcrypt('22mei2001')
        //]);

        User::create([
            'name' => 'Adam Maulana Kusumah',
            'username' => 'Adam-test',
            'email' => 'adammaulana0905@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        //Post::create([
        //    'category_id' => 1,
        //    'user_id' => 1,
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores obcaecati laborum expedita exercitationem, rerum odio molestias consequuntur sit officiis quas!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque, autem soluta molestiae eveniet ut blanditiis voluptatibus accusantium? Iste ut sapiente aliquid eveniet ex, quod amet aspernatur quo enim dolore.</p>'
        //]);

        //Post::create([
        //    'category_id' => 1,
        //    'user_id' => 2,
        //    'title' => 'Judul Kedua',
        //    'slug' => 'judul-kedua',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores obcaecati laborum expedita exercitationem, rerum odio molestias consequuntur sit officiis quas!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque, autem soluta molestiae eveniet ut blanditiis voluptatibus accusantium? Iste ut sapiente aliquid eveniet ex, quod amet aspernatur quo enim dolore.</p>'
        //]);

        //Post::create([
        //    'category_id' => 2,
        //    'user_id' => 1,
        //    'title' => 'Judul Ketiga',
        //    'slug' => 'judul-ketiga',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores obcaecati laborum expedita exercitationem, rerum odio molestias consequuntur sit officiis quas!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque, autem soluta molestiae eveniet ut blanditiis voluptatibus accusantium? Iste ut sapiente aliquid eveniet ex, quod amet aspernatur quo enim dolore.</p>'
        //]);

        //Post::create([
        //    'category_id' => 2,
        //    'user_id' => 2,
        //    'title' => 'Judul Keempat',
        //    'slug' => 'judul-keempat',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quo.',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores obcaecati laborum expedita exercitationem, rerum odio molestias consequuntur sit officiis quas!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque, autem soluta molestiae eveniet ut blanditiis voluptatibus accusantium? Iste ut sapiente aliquid eveniet ex, quod amet aspernatur quo enim dolore.</p>'
        //]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
