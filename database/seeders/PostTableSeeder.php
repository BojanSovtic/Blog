<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = User::create([
            'name' => 'Petar',
            'email' => 'pperic@gmail.pcm',
            'password' => Hash::make('pperic123')
        ]);

        $author2 = User::create([
            'name' => 'Zika',
            'email' => 'zzikic@gmail.pcm',
            'password' => Hash::make('zzikic123')
        ]);

        $category1 = Category::create([
            'name' => 'News'
        ]);

        $category2 = Category::create([
            'name' => 'Sports'
        ]);

        $category3 = Category::create([
            'name' => 'Health'
        ]);

        $category4 = Category::create([
            'name' => 'Education'
        ]);

        $tag1 = Tag::create([
            'name' => 'Art'
        ]);

        $tag2 = Tag::create([
            'name' => 'Books'
        ]);

        $tag3 = Tag::create([
            'name' => 'Food'
        ]);

        $tag4 = Tag::create([
            'name' => 'Music'
        ]);

        $tag5 = Tag::create([
            'name' => 'Photography'
        ]);

        $tag6 = Tag::create([
            'name' => 'Travel'
        ]);

        $post1 = $author1->posts()->create([
            'title' => 'This is blog title number one!',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec arcu enim.
                Praesent facilisis justo ac augue mattis feugiat. Nam vitae dolor nec est varius euismod.
                Sed vitae arcu id lectus varius porttitor. Duis tempor, tortor vitae viverra scelerisque,
                sem erat condimentum sapien, a sollicitudin mi ante id dui. Aliquam mauris nisl,
                sollicitudin vel pellentesque eu, pharetra in metus. Proin accumsan, justo eget
                fermentum mattis, justo elit venenatis nisl, non tempus massa justo id diam. Nam
                laoreet urna nec leo pulvinar, vel lobortis metus hendrerit. Pellentesque scelerisque mi at elementum iaculis. ',
            'image' => 'posts/blog_1.jpg',
            'category_id' => $category1->id
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'This is blog title number two!',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec arcu enim.
                Praesent facilisis justo ac augue mattis feugiat. Nam vitae dolor nec est varius euismod.
                Sed vitae arcu id lectus varius porttitor. Duis tempor, tortor vitae viverra scelerisque,
                sem erat condimentum sapien, a sollicitudin mi ante id dui. Aliquam mauris nisl,
                sollicitudin vel pellentesque eu, pharetra in metus. Proin accumsan, justo eget
                fermentum mattis, justo elit venenatis nisl, non tempus massa justo id diam. Nam
                laoreet urna nec leo pulvinar, vel lobortis metus hendrerit. Pellentesque scelerisque mi at elementum iaculis. ',
            'image' => 'posts/blog_2.jpg',
            'category_id' => $category2->id
        ]);

        $post3 = $author1->posts()->create([
            'title' => 'This is blog title number three!',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec arcu enim.
                Praesent facilisis justo ac augue mattis feugiat. Nam vitae dolor nec est varius euismod.
                Sed vitae arcu id lectus varius porttitor. Duis tempor, tortor vitae viverra scelerisque,
                sem erat condimentum sapien, a sollicitudin mi ante id dui. Aliquam mauris nisl,
                sollicitudin vel pellentesque eu, pharetra in metus. Proin accumsan, justo eget
                fermentum mattis, justo elit venenatis nisl, non tempus massa justo id diam. Nam
                laoreet urna nec leo pulvinar, vel lobortis metus hendrerit. Pellentesque scelerisque mi at elementum iaculis. ',
            'image' => 'posts/blog_3.jpg',
            'category_id' => $category3->id
        ]);

        $post4 = $author2->posts()->create([
            'title' => 'This is blog title number four!',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec arcu enim.
                Praesent facilisis justo ac augue mattis feugiat. Nam vitae dolor nec est varius euismod.
                Sed vitae arcu id lectus varius porttitor. Duis tempor, tortor vitae viverra scelerisque,
                sem erat condimentum sapien, a sollicitudin mi ante id dui. Aliquam mauris nisl,
                sollicitudin vel pellentesque eu, pharetra in metus. Proin accumsan, justo eget
                fermentum mattis, justo elit venenatis nisl, non tempus massa justo id diam. Nam
                laoreet urna nec leo pulvinar, vel lobortis metus hendrerit. Pellentesque scelerisque mi at elementum iaculis. ',
            'image' => 'posts/blog_4.jpg',
            'category_id' => $category4->id
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag3->id, $tag4->id]);
        $post3->tags()->attach([$tag5->id, $tag6->id]);
        $post4->tags()->attach([$tag1->id, $tag4->id, $tag5->id]);

    }
}
