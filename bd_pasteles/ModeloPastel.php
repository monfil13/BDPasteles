<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloPastel extends CI_Model {

    public function obtenerDatos() {

        $query = $this->db->query("SELECT PastelID, Nombre, Precio FROM pasteles");
        return $query->result();
    }
}