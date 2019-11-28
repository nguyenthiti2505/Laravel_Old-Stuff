<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(SlideSeeder::class);
      // $this->call(CategoriesTableSeeder::class);
      // $this->call(Sub_CategoriesTableSeeder::class);
      // $this->call(UsersTableSeeder::class);
      // $this->call(ProductsTableSeeder::class);
      // $this->call(ClubSeeder::class);
      // $this->call(activitySeeder::class);
      // $this->call(ImageClubSeeder::class);
      $this->call(PostsTableSeeder::class);
        $this->call(BargainSeeder::class);
       
       // $this->call(NewsTableSeeder::class);
       // $this->call(CommentsTableSeeder::class);
    }
}
