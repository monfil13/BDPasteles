<?php

$basePath = 'C:/Users/Daniel Monfil/Downloads';
defined('BASEPATH', $basePath) OR exit('No direct script access allowed');

class Exportar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModeloPastel'); // Reemplaza 'Tu_modelo' con el nombre de tu modelo
    }

    public function index() {
        $datos = $this->ModeloPastel->obtenerDatos();

        $csvFileName = 'exportacionpasteles.csv';

        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');

        $csvData = $this->dbutil->csv_from_result($datos);

        write_file($csvFileName, $csvData);

        force_download($csvFileName, NULL);
    }
}
