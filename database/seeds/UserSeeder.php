<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=UserSeeder
     *
     * @return void
     */
    public function run()
    {
        //

        DB::insert("INSERT INTO users (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)", [
            1,'vasya','vasya@mail.com','000000','admin'
        ]);

        DB::insert("INSERT INTO users (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)", [
            2,'nevasya','nevasya@mail.com','111111',''
        ]);


        DB::insert("INSERT INTO users (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)", [
            3,'Александр','alex@mail.com','111111',''
        ]);

        DB::insert("INSERT INTO users (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)", [
            4,'Виктор Зинченко','zinchenko.us@gmail.com','222222','admin'
        ]);

        DB::insert("INSERT INTO users (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)", [
            5,'Сергей','serg@mail.com','111111',''
        ]);




    }
}
