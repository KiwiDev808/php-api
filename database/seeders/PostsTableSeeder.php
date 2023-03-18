<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'title' => 'First post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel augue et risus maximus rhoncus non sit amet dui. Duis rutrum neque id velit ultrices, eu faucibus nisi lobortis. Donec nec mi eu turpis faucibus molestie. ',
                'author' => 'John Doe'
            ],
            [
                'title' => 'Second post',
                'content' => 'Sed euismod neque in velit laoreet sollicitudin. Suspendisse luctus congue orci, vitae rhoncus magna sagittis in. Fusce in aliquam nunc. Nulla luctus consequat neque eu congue. ',
                'author' => 'Jane Doe'
            ],
            [
                'title' => 'Third post',
                'content' => 'Etiam sit amet ante euismod, facilisis velit sed, faucibus massa. Ut sed ex a nisl venenatis commodo. In hac habitasse platea dictumst. Etiam vel ultrices urna. ',
                'author' => 'Mark Smith'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
