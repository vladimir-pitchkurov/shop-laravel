<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * created by command: php artisan make:seeder ProductSeeder
     *
     * use command:  php artisan db:seed --class=ProductSeeder
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            34,'Ноутбук Asus X200MA (X200MA-KX315D)',13,1839707,395,1,
            'Asus','Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / '
            .'без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий',0,0,1
        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            35,'Ноутбук HP Stream 11-d050nr',13,2343847,305,0,
            'Hewlett Packard','Экран 11.6” (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / eMMC 32 ГБ / '
            .'Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 + MS Office 365 / 1.28 кг / синий',1,1,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            36,'Ноутбук Asus X200MA White ',13,2028027,270,1,'Asus','Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / белый',0,1,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            37,'Ноутбук Acer Aspire E3-112-C65X',13,2019487,325,1,'Acer','Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linpus / 1.29 кг / серебристый',0,1,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            38,'Ноутбук Acer TravelMate TMB115',13,1953212,275,1,'Acer','Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный',0,0,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            39,'Ноутбук Lenovo Flex 10',13,1602042,370,0,'Lenovo','Экран 10.1\" (1366x768) HD LED, сенсорный, глянцевый / Intel Celeron N2830 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 / 1.2 кг / черный',0,0,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            40,'Ноутбук Asus X751MA',13,2028367,430,1,'Asus','Экран 17.3\" (1600х900) HD+ LED, глянцевый / Intel Pentium N3540 (2.16 - 2.66 ГГц) / RAM 4 ГБ / HDD 1 ТБ / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / DOS / 2.6 кг / белый',0,1,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            41,'Samsung Galaxy Tab S 10.5 16GB',14,1129365,780,1,'Samsung','Samsung Galaxy Tab S создан для того, чтобы сделать вашу жизнь лучше. Наслаждайтесь своим контентом с покрытием 94% цветов Adobe RGB и 100000:1 уровнем контрастности, который обеспечивается sAmoled экраном с функцией оптимизации под отображаемое изображение и окружение. Яркий 10.5” экран в ультратонком корпусе весом 467 г порадует вас высоким уровнем портативности. Работа станет проще вместе с Hancom Office и удаленным доступом к вашему ПК. E-Meeting и WebEx – отличные помощники для проведения встреч, когда вы находитесь вне офиса. Надежно храните ваши данные благодаря сканеру отпечатка пальцев.',1,1,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            42,'Samsung Galaxy Tab S 8.4 16GB',14,1128670,640,1,'Samsung','Экран 8.4\" Super AMOLED (2560x1600) емкостный Multi-Touch / Samsung Exynos 5420 (1.9 ГГц + 1.3 ГГц) / RAM 3 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Bluetooth 4.0 / Wi-Fi 802.11 a/b/g/n/ac / основная камера 8 Мп, фронтальная 2.1 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / 294 г / белый',0,0,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            43,'Gazer Tegra Note 7',14,683364,210,1,'Gazer','Экран 7\" IPS (1280x800) емкостный Multi-Touch / NVIDIA Tegra 4 (1.8 ГГц) / RAM 1 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Wi-Fi / Bluetooth 4.0 / основная камера 5 Мп, фронтальная - 0.3 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / вес 320 г',0,0,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            44,'Монитор 23\" Dell E2314H Black',15,355025,175,1,'Dell','С расширением Full HD Вы сможете рассмотреть мельчайшие детали. Dell E2314H предоставит Вам резкое и четкое изображение, с которым любая работа будет в удовольствие. Full HD 1920 x 1080 при 60 Гц разрешение (макс.)',0,0,1

        ]);


        DB::insert('INSERT INTO products (id, name, category_id, code, price, availability, brand, description, is_new, is_recommended, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [

            45,'Компьютер Everest Game ',16,1563832,1320,1,'Everest','Everest Game 9085 — это компьютеры премимум класса, собранные на базе эксклюзивных компонентов, тщательно подобранных и протестированных лучшими специалистами нашей компании. Это топовый сегмент систем, который отвечает наилучшим характеристикам показателей качества и производительности.',0,0,1

        ]);


        /*DB::table('products')->insert([
            [
                'name' => 'product-2',
                'category_id' => '22',
                'code' => '2651672',
                'price' => '2000',
                'availability' => '1',
                'brand' => 'Bosh',
                'description' => 'Best Tools!!!',
                'is_new' => '0',
                'is_recommended' => '1',
                'status' => '1'
            ],
            [
                'name' => 'product-3',
                'category_id' => '221',
                'code' => '26516272',
                'price' => '2003',
                'availability' => '1',
                'brand'  => 'Sony',
                'description' => 'Best Digit Tools!!!',
                'is_new' => '0',
                'is_recommended' => '1',
                'status' => '1'
            ]
        ]);

        Product::create([
            'name' => 'product-4',
            'category_id' => '25',
            'code' => '265162',
            'price' => '20',
            'availability' => '1',
            'brand'  => 'Bony',
            'description' => 'Best thinkss!!!',
            'is_new' => '0',
            'is_recommended' => '1',
            'status' => '1'
        ]);*/


    }
}
