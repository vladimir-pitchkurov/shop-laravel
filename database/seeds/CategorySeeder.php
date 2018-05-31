<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * created by command: php artisan make:seeder CategorySeeder
     *
     * use command:  php artisan db:seed --class=CategorySeeder
     * @return void
     */
    public function run()
    {

        DB::insert("INSERT INTO categories (id, name, sort_order, status) VALUES (?, ?, ?, ?)", [
            '13','Ноутбуки','1','1'
        ]);

        DB::insert("INSERT INTO categories (id, name, sort_order, status) VALUES (?, ?, ?, ?)", [
            14,'Планшеты',2,1
        ]);

        DB::insert("INSERT INTO categories (id, name, sort_order, status) VALUES (?, ?, ?, ?)", [
            15,'Мониторы',3,1
        ]);

        DB::insert("INSERT INTO categories (id, name, sort_order, status) VALUES (?, ?, ?, ?)", [
            16,'Игровые компьютеры',4,1
        ]);

    }
}
