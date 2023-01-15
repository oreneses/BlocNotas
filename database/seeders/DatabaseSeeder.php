<?php

namespace Database\Seeders;
use App\Models\Nota;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'title' => 'Año nuevo', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-01-01'],
            ['id' => '2', 'title' => 'Nuevas metas', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-02-22'],
            ['id' => '3', 'title' => 'Excusrsión', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-03-11'],
            ['id' => '4', 'title' => 'Semana santa', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-04-02'],
            ['id' => '5', 'title' => 'Recta final', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-05-03'],
            ['id' => '6', 'title' => 'Comienzan mis vacaciones', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-06-28'],
            ['id' => '7', 'title' => 'Aniversario', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2021-07-29'],
            ['id' => '8', 'title' => 'Salida del hospital', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-01-22'],
            ['id' => '9', 'title' => 'Hospital', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-01-21'],
            ['id' => '10', 'title' => 'Final de exámenes', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-05-21'],
            ['id' => '11', 'title' => 'Inicio de exámenes', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-05-11'],
            ['id' => '12', 'title' => 'Playa', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-07-10'],
            ['id' => '13', 'title' => 'Día en la montaña', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-08-15'],
            ['id' => '14', 'title' => 'Final de mis vacaciones', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-09-18'],
            ['id' => '15', 'title' => 'Nuevo curso', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-10-09'],
            ['id' => '16', 'title' => 'Último mes', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2022-12-01'],
            ['id' => '17', 'title' => 'Nuevos propósitos', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2023-01-10'],
            ['id' => '18', 'title' => 'Año nuevo', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2023-01-01'],
            ['id' => '19', 'title' => 'Mis reyes magos', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2023-01-06'],
            ['id' => '20', 'title' => 'Vuelta a la rutina', 'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'creation_date'=> '2023-01-09']
        ];

        DB::table('notes')->insert($data);
    }
}
