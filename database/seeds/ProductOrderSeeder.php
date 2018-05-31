<?php

use Illuminate\Database\Seeder;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * use command:  php artisan db:seed --class=ProductOrderSeeder
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO product_orders (id, user_name, user_phone, user_comment, user_id, created_at, products, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            46,'САША1','g3424242342','',4,'2015-05-18 15:34:42','{\"44\":3,\"43\":3}',1
        ]);

        DB::insert("INSERT INTO product_orders (id, user_name, user_phone, user_comment, user_id, created_at, products, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            45,'fsdfsd','1','123123123',4,'2015-05-14 09:54:45','{\"1\":1,\"2\":1,\"3\":2}',3
        ]);




    }
}
