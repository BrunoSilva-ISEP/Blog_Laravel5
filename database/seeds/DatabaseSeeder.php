<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('PostTableSeeder');
        $this->call('TagTableSeeder');

    }

}
class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class, 200)->create();
    }
}
class TagTableSeeder extends Seeder
{
    public function run()
    {
        App\Tag::truncate();
        factory(App\Tag::class, 200)->create();
    }
}
