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
        // $this->call(UsersTableSeeder::class);
        // DB::table('todos')->truncate(); // 追記

        // $testData = [
        //     [
        //         'content' => 'PHP Appセクションを終える',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'content' => 'Laravel Lessonを終える',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];
    
        // DB::table('todos')->insert($testData); // 追記

            $this->call([
                TodoSeeder::class,
            ]);
    }
}
