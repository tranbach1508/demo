<?php

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Đồng hồ nam'
            ],
            [
                'id'=>2,
                'name'=>'Đồng hồ nữ'
            ]
        ]);
    }
}
