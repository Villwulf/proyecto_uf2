<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
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
        self::seedUsers();
        self::seedGallery();
        $this->command->info('Taula catàleg inicialitzada amb dades!');
    }

    public function seedUsers()
    {
        DB::table('users')->delete();
        $p = new User;
        $p->name = "Ruben";
        $p->email = "rcaguilera97@gmail.com";
        $p->email_verified_at = now();
        $p->password = bcrypt("1234");
        $p->save();
        $p2 = new User;
        $p2->name = "Samuel";
        $p2->email = "samuel@gmail.com";
        $p->email_verified_at = now();
        $p2->password = bcrypt("1234");
        $p2->save();
    }

    public function seedGallery()
    {
        DB::table('images')->delete();
        $p = new Image;
        $p->title = "Estudiando";
        $p->status = "no publicitat";
        $p->access = "public";
        $p->ticket1 = "Estudiando";
        $p->ticket2 = "Universidad";
        $p->ticket3 = "Libros";
        $p->autor = "Paula";
        $p->email = "paula@gmail.com";
        $p->img = "https://ep01.epimg.net/cultura/imagenes/2018/08/15/babelia/1534351691_997591_1534352892_noticia_normal.jpg";
        $p->save();
        $p = new Image;
        $p->title = "Puesta de sol";
        $p->status = "no publicitat";
        $p->access = "public";
        $p->ticket1 = "Paisaje";
        $p->ticket2 = "Naturaleza";
        $p->ticket3 = "Sol";
        $p->autor = "Toni";
        $p->email = "toni@gmail.com";
        $p->img = "https://www.hola.com/imagenes/viajes/20200515167936/finisterre-una-puesta-de-sol-en-el-fin-del-mundo/0-823-590/finisterre-puesta-de-sol-t.jpg";
        $p->save();
        $p = new Image;
        $p->title = "Se vende";
        $p->status = "publicitat";
        $p->access = "public";
        $p->ticket1 = "Deportivo";
        $p->ticket2 = "Elegante";
        $p->ticket3 = "Moderno";
        $p->autor = "Carlo";
        $p->email = "carlo@gmail.com";
        $p->img = "https://i.blogs.es/275c57/aston_martin-vantage-2019/240_240.jpg";
        $p->save();
        $p = new Image;
        $p->title = "De fiesta";
        $p->status = "no publicitat";
        $p->access = "privat";
        $p->ticket1 = "Payasos";
        $p->ticket2 = "Fiesta";
        $p->ticket3 = "Amigos";
        $p->autor = "Jose";
        $p->email = "jose@gmail.com";
        $p->img = "https://cnnespanol.cnn.com/wp-content/uploads/2017/02/170210102453-clown-service-03-exlarge-169.jpg";
        $p->save();
        $p = new Image;
        $p->title = "Vozka";
        $p->status = "publicitat";
        $p->access = "public";
        $p->ticket1 = "Alcohol";
        $p->ticket2 = "Ruso";
        $p->ticket3 = "Tienda";
        $p->autor = "Volkov";
        $p->email = "volkov@gmail.com";
        $p->img = "https://www.drinksco.es/blog/assets/uploads/sites/2/2020/02/absolut-vodka-e1582126667414-1024x768.jpg";
        $p->save();
        $p = new Image;
        $p->title = "Dibujando";
        $p->status = "no publicitat";
        $p->access = "privat";
        $p->ticket1 = "Dibujo";
        $p->ticket2 = "Manga";
        $p->ticket3 = "Colores";
        $p->autor = "Han";
        $p->email = "han@gmail.com";
        $p->img = "https://i.blogs.es/6b73d6/my-hero-acc/450_1000.jpeg";
        $p->save();
        $p = new Image;
        $p->title = "Sorteo Maquillaje";
        $p->status = "publicitat";
        $p->access = "public";
        $p->ticket1 = "Sorteo";
        $p->ticket2 = "Maquillaje";
        $p->ticket3 = "Suerte";
        $p->autor = "Carla";
        $p->email = "carla@gmail.com";
        $p->img = "https://images-na.ssl-images-amazon.com/images/I/819GS6xWPBL._AC_SX425_.jpg";
        $p->save();
        $p = new Image;
        $p->title = "Netflix";
        $p->status = "no publicitat";
        $p->access = "public";
        $p->ticket1 = "Netflix";
        $p->ticket2 = "Peliculas";
        $p->ticket3 = "Noches";
        $p->autor = "Ania";
        $p->email = "ania@gmail.com";
        $p->img = "https://static.dw.com/image/54359015_303.jpg";
        $p->save();
    }
}