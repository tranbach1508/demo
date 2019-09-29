<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Casio A158WA-1DF',
                'price'=>400000.0,
                'image'=>'A158WA-1DF.jpg',
                'introduct'=>'Đồng hồ nam Casio A158WA-1DF thuộc dòng đồng hồ nam mạnh mẽ chính hãng có giá tốt nhất trên thị trường hiện nay được cung cấp bởi siêu thị đồng hồ Casiovietnam'
            ],
            [
                'id'=>2,
                'name'=>'Casio A159WGED-1DF',
                'price'=>2400000.0,
                'image'=>'A159WGED-1DF.jpg',
                'introduct'=>'Đồng Hồ Casio Nam A159WGED-1DF Dây Kim Loại mạ vàng kết hợp mặt tạo khối màu đen, Đính Đá Kim Cương, size mặt 36,8 × 33,2 × 9,7 mm'
            ],
            [
                'id'=>3,
                'name'=>'Casio B640WD-1AVDF',
                'price'=>900000.0,
                'image'=>'B640WD-1AVDF.jpg',
                'introduct'=>'Đồng hồ nam Casio B640WD-1AVDF là dòng đồng hồ cổ điển bởi phong cách xa xưa nhưng lại mang trên mình một bộ máy hoàn toàn mới công nghệ cao vượt trội'
            ],
            [
                'id'=>4,
                'name'=>'Casio A168WEGM-9DF',
                'price'=>2700000.0,
                'image'=>'A168WEGM-9DF.jpg',
                'introduct'=>'Đồng hồ điện tử Casio A168WEGM-9 thiết kế cổ điển với dây kim loại mạ vàng, mặt vuông cá tính, chống nước 30m, size mặt 38,6×36,3×9,6mm, tuổi thọ pin 10 năm'
            ],
            [
                'id'=>5,
                'name'=>'Casio LA670WGA-2DF',
                'price'=>1100000.0,
                'image'=>'LA670WGA-2DF.jpg',
                'introduct'=>'Đồng Hồ Nữ Casio LA670WGA-2DF Dây Kim Loại Mạ Vàng - Viền Mặt Màu Xanh, Kích thước vỏ : 30,3×24,6×7,3mm'
            ],
            [
                'id'=>6,
                'name'=>'Casio A700W-1A',
                'price'=>1000000.0,
                'image'=>'A700W-1A.jpg',
                'introduct'=>'Đồng Hồ Casio A700W-1A Điện Tử Cổ Điển - Dây Kim Loại, Mặt Vuông Cá Tính siêu mỏng, Kích thước vỏ : 37,4×35,5×6mm, Tuổi thọ pin xấp xỉ: 3 năm với pin CR1616'
            ],
        ]);
    }
}
