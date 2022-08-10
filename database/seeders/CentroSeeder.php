<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centro::truncate();
        $csvData = fopen(base_path('database/csv/centro.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 0, ';')) !== false) {
            if (!$transRow) {
                Centro::create([
                    'idorg' => $data['0'],
                    'rut' => $data['1'],
                    'nombre' => $data['2'],
                    'regis' => $data['3'],
                    'fojas' => $data['4'],
                    'tipo' => $data['5'],
                    'detalle' => $data['6'],
                    'direc' => $data['7'],
                    'fonosede' => $data['8'],
                    'uvecinal' => $data['9'],
                    'sector' => $data['10'],
                    'zona' => $data['11'],
                    'nsocios' => $data['12'],
                    'ffunda' => $data['13'],
                    'ndecpj' => $data['14'],
                    'fincrip' => $data['15'],
                    'fdecpj' => $data['16'],
                    'desde' => $data['17'],
                    'hasta' => $data['18'],
                    'rutpresi' => $data['19'],
                    'npresi' => $data['20'],
                    'direcpresi' => $data['21'],
                    'fonopresi' => $data['22'],
                    'rutsecre' => $data['23'],
                    'nsecre' => $data['24'],
                    'direcsecre' => $data['25'],
                    'fonosecre' => $data['26'],
                    'rutteso' => $data['27'],
                    'nteso' => $data['28'],
                    'directeso' => $data['29'],
                    'fonoteso' => $data['30'],
                    'rutdirec1' => $data['31'],
                    'ndirec1' => $data['32'],
                    'direcdirec1' => $data['33'],
                    'fonodirec1' => $data['34'],
                    'rutdirec2' => $data['35'],
                    'ndirec2' => $data['36'],
                    'direcdirec2' => $data['37'],
                    'fonodirec2' => $data['38'],
                    'obs' => $data['39'],
                    'idcen' => $data['40'],
                    'fecharcei' => $data['41'],
                    'fecharecepm' => $data['42'],
                    'nregrcei' => $data['43'],
                    'fechareg1' => $data['44'],
                    'fechareg2' => $data['45'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
