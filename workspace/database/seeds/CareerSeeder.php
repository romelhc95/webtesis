<?php

use Illuminate\Database\Seeder;
use App\Career;
use Illuminate\Databse\Eloquent\Model;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'description'=>"ARQUITECTURA",
            'idfaculty'=>"1",
        ]);
        DB::table('careers')->insert([
            'description'=>"CIENCIAS DE LA COMUNICACIÓN",
            'idfaculty'=>"2",
        ]);
        DB::table('careers')->insert([
            'description'=>"ARTES Y DISEÑO GRAFICO EMPRESARIAL",
            'idfaculty'=>"2",
        ]);
        DB::table('careers')->insert([
            'description'=>"ADMINISTRACIÓN",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"ADMINISTRACIÓN EN TURISMO Y HOTELERIA",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"CONTABILIDAD",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"MARKETING Y DIRECCIÓN DE EMPRESAS",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"NEGOCIOS INTERNACIONALES",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"ECONOMÍA",
            'idfaculty'=>"3",
        ]);
        DB::table('careers')->insert([
            'description'=>"ENFERMERÍA",
            'idfaculty'=>"4",
        ]);
        DB::table('careers')->insert([
            'description'=>"MEDICINA HUMANA",
            'idfaculty'=>"4",
        ]);
        DB::table('careers')->insert([
            'description'=>"NUTRICIÓN",
            'idfaculty'=>"4",
        ]);
        DB::table('careers')->insert([
            'description'=>"OBSTETRICIA",
            'idfaculty'=>"4",
        ]);
        DB::table('careers')->insert([
            'description'=>"ESTOMATOLOGÍA",
            'idfaculty'=>"4",
        ]);
        DB::table('careers')->insert([
            'description'=>"DERECHO",
            'idfaculty'=>"5",
        ]);
        DB::table('careers')->insert([
            'description'=>"EDUCACIÓN INICIAL",
            'idfaculty'=>"6",
        ]);
        DB::table('careers')->insert([
            'description'=>"EDUCACIÓN PRIMARIA",
            'idfaculty'=>"6",
        ]);
        DB::table('careers')->insert([
            'description'=>"TRADUCCIÓN E INTERPRETACIÓN",
            'idfaculty'=>"6",
        ]);
        DB::table('careers')->insert([
            'description'=>"CIENCIAS DEL DEPORTE",
            'idfaculty'=>"6",
        ]);
        DB::table('careers')->insert([
            'description'=>"EDUCACIÓN EN IDIOMAS",
            'idfaculty'=>"6",
        ]);
        DB::table('careers')->insert([
            'description'=>"PSICOLOGÍA",
            'idfaculty'=>"7",
        ]);
        DB::table('careers')->insert([
            'description'=>"PSICOLOGÍA ORGANIZACIONAL",
            'idfaculty'=>"7",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA CIVIL",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA AMMBIENTAL",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA INDUSTRIAL",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA AGROINDUSTRIAL",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA AGROINDUSTRIAL Y COMERCIO EXTERIOR",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA ELÉCTRICA E INGENIERÍA MECÁNICA",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA DE SISTEMAS",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA EMPRESARIAL",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA MULTIMEDIA",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA DE MINAS",
            'idfaculty'=>"8",
        ]);
        DB::table('careers')->insert([
            'description'=>"INGENIERÍA AGRÓNOMA",
            'idfaculty'=>"8",
        ]);
    }
}
