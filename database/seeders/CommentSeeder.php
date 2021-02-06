<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'product_id' => 1,
            'user_id' => 1,
            'body' => 'Bu çok güzel bir ürün!',
        ]);
    }
}
