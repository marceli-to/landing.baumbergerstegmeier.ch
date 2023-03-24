<?php
namespace Database\Seeders;
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
    $this->call([
      \Database\Seeders\RoleSeeder::class,
      \Database\Seeders\UserSeeder::class,
      \Database\Seeders\FloorSeeder::class,
    ]);
  }
}
