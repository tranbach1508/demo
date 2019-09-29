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
        $this->call(categories::class);
        $this->call(products::class);
        $this->call(pro_cate::class);
    }
}
