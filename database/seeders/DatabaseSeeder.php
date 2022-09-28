<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Gepine',
            'username' => 'gepine',
            'email' => 'asd@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Fessy',
        //     'email' => 'fessychessy@gmail.com',
        //     'password' => bcrypt('51356')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus minima, iusto sapiente accusamus odit fuga ad delectus, eveniet earum distinctio ea dolores vero, eum deleniti. Nobis facilis, beatae culpa vel adipisci voluptatibus magni.Ipsa, maxime neque id recusandae accusamus commodi asperiores aliquam ipsum voluptate earum facere optio fugit perspiciatis reiciendis. Ducimus minima praesentium asperiores dolore, iusto, at eligendi nemo cupiditate ullam sed inventore tempore ad incidunt explicabo impedit fugit aut! Quas non laborum accusamus repudiandae blanditiis debitis ipsum magnam inventore consectetur ad quo esse voluptate iusto repellendus quia numquam deleniti perspiciatis, nobis aliquid facere id, sed aut expedita.Quibusdam quisquam nemo eaque ratione. Unde iusto delectus adipisci minima ea nostrum repudiandae qui consequuntur. Voluptatum, sapiente ipsum possimus enim iste praesentium mollitia animi consequatur unde doloremque officiis, modi et id, quibusdam quas aut? Commodi molestiae porro, repudiandae illum expedita laborum labore natus ad nobis, voluptatem quis, veritatis earum eveniet atque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus minima, iusto sapiente accusamus odit fuga ad delectus, eveniet earum distinctio ea dolores vero, eum deleniti. Nobis facilis, beatae culpa vel adipisci voluptatibus magni.Ipsa, maxime neque id recusandae accusamus commodi asperiores aliquam ipsum voluptate earum facere optio fugit perspiciatis reiciendis. Ducimus minima praesentium asperiores dolore, iusto, at eligendi nemo cupiditate ullam sed inventore tempore ad incidunt explicabo impedit fugit aut! Quas non laborum accusamus repudiandae blanditiis debitis ipsum magnam inventore consectetur ad quo esse voluptate iusto repellendus quia numquam deleniti perspiciatis, nobis aliquid facere id, sed aut expedita.Quibusdam quisquam nemo eaque ratione. Unde iusto delectus adipisci minima ea nostrum repudiandae qui consequuntur. Voluptatum, sapiente ipsum possimus enim iste praesentium mollitia animi consequatur unde doloremque officiis, modi et id, quibusdam quas aut? Commodi molestiae porro, repudiandae illum expedita laborum labore natus ad nobis, voluptatem quis, veritatis earum eveniet atque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus minima, iusto sapiente accusamus odit fuga ad delectus, eveniet earum distinctio ea dolores vero, eum deleniti. Nobis facilis, beatae culpa vel adipisci voluptatibus magni.Ipsa, maxime neque id recusandae accusamus commodi asperiores aliquam ipsum voluptate earum facere optio fugit perspiciatis reiciendis. Ducimus minima praesentium asperiores dolore, iusto, at eligendi nemo cupiditate ullam sed inventore tempore ad incidunt explicabo impedit fugit aut! Quas non laborum accusamus repudiandae blanditiis debitis ipsum magnam inventore consectetur ad quo esse voluptate iusto repellendus quia numquam deleniti perspiciatis, nobis aliquid facere id, sed aut expedita.Quibusdam quisquam nemo eaque ratione. Unde iusto delectus adipisci minima ea nostrum repudiandae qui consequuntur. Voluptatum, sapiente ipsum possimus enim iste praesentium mollitia animi consequatur unde doloremque officiis, modi et id, quibusdam quas aut? Commodi molestiae porro, repudiandae illum expedita laborum labore natus ad nobis, voluptatem quis, veritatis earum eveniet atque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke-empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus minima, iusto sapiente accusamus odit fuga ad delectus, eveniet earum distinctio ea dolores vero, eum deleniti. Nobis facilis, beatae culpa vel adipisci voluptatibus magni.Ipsa, maxime neque id recusandae accusamus commodi asperiores aliquam ipsum voluptate earum facere optio fugit perspiciatis reiciendis. Ducimus minima praesentium asperiores dolore, iusto, at eligendi nemo cupiditate ullam sed inventore tempore ad incidunt explicabo impedit fugit aut! Quas non laborum accusamus repudiandae blanditiis debitis ipsum magnam inventore consectetur ad quo esse voluptate iusto repellendus quia numquam deleniti perspiciatis, nobis aliquid facere id, sed aut expedita.Quibusdam quisquam nemo eaque ratione. Unde iusto delectus adipisci minima ea nostrum repudiandae qui consequuntur. Voluptatum, sapiente ipsum possimus enim iste praesentium mollitia animi consequatur unde doloremque officiis, modi et id, quibusdam quas aut? Commodi molestiae porro, repudiandae illum expedita laborum labore natus ad nobis, voluptatem quis, veritatis earum eveniet atque.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
