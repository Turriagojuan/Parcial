<?php
class MarcaDao{
    private $idMarca;
    private $nombre;

    
    public function __construct($idMarca=0, $nombre=""){
        $this -> idMarca = $idMarca;
        $this -> nombre = $nombre;
    }
    
    public function consultarMarcas(){
        return "SELECT idMarca, nombre
                FROM Marca";
    }
    
    
}

?>