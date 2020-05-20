<?php

namespace App\Console\Commands;

use App\Material;

use Illuminate\Console\Command;

class CreateMaterials extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:materiales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cargar base de datos de materiales';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function readData()
    {
        $Material  = array();
        $SubMaterial = array();
        $Factor = array();
        $Descripcion = array();

        $fila = 1;
        $path = resource_path('csv/materiales.csv');

        if (($gestor = fopen($path, "r")) !== FALSE) {
            while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                $numero = count($datos);
                // echo "$numero de campos en la línea $fila: \n";
                $fila++;
                // for ($c = 0; $c < $numero; $c++) {
                //     echo $datos[$c] . "-" . gettype($datos[$c]) . "\n";
                // }
                array_push($Material, $datos[0]);
                array_push($SubMaterial, $datos[1]);
                array_push($Factor, (float) $datos[2]);
                array_push($Descripcion, $datos[3]);
            }
            fclose($gestor);
        }

        // $results = print_r($Material, true);
        // echo $results;
        // $results = print_r($SubMaterial, true);
        // echo $results;
        // $results = print_r($Factor, true);
        // echo $results;

        $Result = array(
            "Material" => $Material,
            "SubMaterial" => $SubMaterial,
            "Factor" => $Factor,
            "Descripcion" => $Descripcion
        );
        return $Result;
    }

    public function handle()
    {
        $this->info('Cargando los materiales en la Base de Datos...');

        $MaterialsArray = $this->readData();

        // Store in Database
        for ($i = 1; $i < sizeof($MaterialsArray["Material"]); $i++) {
            $material = new Material;
            $material->nombre = $MaterialsArray["Material"][$i];
            $material->nombresub = $MaterialsArray["SubMaterial"][$i];
            $material->factor = $MaterialsArray["Factor"][$i];
            $material->mensaje = $MaterialsArray["Descripcion"][$i];

            $material->save();
        }

        $this->info('Materiales cargados correctamente.');
    }
}
