<?php

use Illuminate\Database\Seeder;

class pro_cate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pro_cate')->insert([
            [
                'pro_id'=>1,
                'cate_id'=>1,
            ],
            [
                'pro_id'=>1,
                'cate_id'=>2,
            ],
            [
                'pro_id'=>2,
                'cate_id'=>1,
            ],
            [
                'pro_id'=>2,
                'cate_id'=>2,
            ],
            [
                'pro_id'=>3,
                'cate_id'=>2,
            ],
            [
                'pro_id'=>4,
                'cate_id'=>1,
            ],
            [
                'pro_id'=>5,
                'cate_id'=>2,
            ],
            [
                'pro_id'=>6,
                'cate_id'=>1,
            ],
            [
                'pro_id'=>6,
                'cate_id'=>2,
            ],
        ]);
    }
}
