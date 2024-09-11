<?php
require_once 'persistencia/Conexion.php';
require ("./persistencia/MarcaDAO.php");

class Marca{
    private $idMarca;
    private $nombre;

    public function getIdMarca() {
        return $this->idMarca;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setIdMarca($idMarca){
        $this->idMarca = $idMarca;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function __construct($idMarca=0, $nombre=""){
        $this -> idMarca = $idMarca;
        $this -> nombre = $nombre;
    }
    
    public function consultarMarcas(){
        $Marcas = array();
        $conexion = new Conexion();
        $conexion -> abrirConexion();
        $MarcaDAO = new MarcaDAO();
        $conexion -> ejecutarConsulta($MarcaDAO -> consultarMarcas());
        while($registro = $conexion -> siguienteRegistro()){
            $Marca = new Marca($registro[0], $registro[1]);
            array_push($Marcas, $Marca);
        }
        $conexion -> cerrarConexion();
        return $Marcas;        
    }
    
}

?>