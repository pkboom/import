<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'asdf@asdf.com',
        ]);

        User::factory()->create([
            'name' => 'John Doe2',
            'email' => 'asdf2@asdf.com',
        ]);

        // php artisan make:model Post -c -f -m -s
        Post::factory()
            ->count(10)
            ->recycle($user)
            ->create();

        $this->create100Users();
    }

    public function create100Users()
    {
        $password = bcrypt('asdfasdf');

        $query = <<<QEURY
SET cte_max_recursion_depth = 4294967295;

INSERT INTO users (name, email, password)
WITH RECURSIVE counter(n) AS(
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM counter WHERE n < 100
)
SELECT CONCAT('name-', counter.n), CONCAT(CONCAT('mail-',  counter.n), '@gmail.com'), '{$password}'
FROM counter
QEURY;

        DB::unprepared($query);
    }
}
