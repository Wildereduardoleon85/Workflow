<?php

try{
    $conexion = new PDO('mysql:host=localhost;dbname=app1ey', 'root', 'Tu contraseña de MySQL' );
}catch(PDOException $e){
    echo "Error: ". $e->getMessage();
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty('busqueda_rut')){
    $busqueda = $_GET['busqueda_rut'];

    $statement = $conexion->prepare(
        'SELECT * FROM clientes WHERE rut = :busqueda'
    );

    $statement->execute(array(':busqueda' => "$busqueda"));
    $resultados = $statement->fetchAll();

    if(empty($resultados)){
        $titulo = 'No se encontró el rut: ' .$busqueda;
    }else{
        $titulo = '';
    }
}

require 'buscar.view.php';


?>