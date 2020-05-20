<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class Georreferenciacion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:geo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cargar base de datos de los municipios, comunas y sectores';

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
    public function handle()
    {
        $this->info('Cargando los municipios,comunas y sectores en la Base de Datos...');
          DB::unprepared(file_get_contents(resource_path('csv/mun.sql')));
        $this->info('Georreferenciacion cargada correctamente.');
    }
}
