<?php
    $medicamentos= array(
        array("nombre"=>"aspirina", "precio"=>"3.89", "stock"=>140, "sucursal"=>"Sucursal B"),
        array("nombre"=>"ibuprofeno", "precio"=>"7.65", "stock"=>30, "sucursal"=>"Sucursal C"),
        array("nombre"=>"paracetamol", "precio"=>"6.23", "stock"=>5, "sucursal"=>"Sucursal A"),
        array("nombre"=>"amoxicilina", "precio"=>"3.33", "stock"=>70, "sucursal"=>"Sucursal A"),
        array("nombre"=>"omeprazol", "precio"=>"11.42", "stock"=>0, "sucursal"=>"Sucursal C"),
        array("nombre"=>"acomicil", "precio"=>"31.22", "stock"=>0, "sucursal"=>"Sucursal B"),
    );

    $medicamentoBuscado = readline("Introduce el nombre de un medicamento:\n");
    $sucursalBuscada = readline("Introduce la sucursal del medicamento:\n");

    for($i=0; $i<count($medicamentos); $i++){
        $medicamento = $medicamentos[$i];
        if($medicamento["nombre"]==$medicamentoBuscado && $medicamento["sucursal"]==$sucursalBuscada && $medicamento["stock"] ==0){
            echo("Lo sentimos, no hay stock para el medicamento $medicamentoBuscado");
            break;
        }else if($medicamento["nombre"]==$medicamentoBuscado && $medicamento["sucursal"]==$sucursalBuscada && $medicamento["stock"]<=10){
            echo("El medicamento $medicamentoBuscado está disponible en $sucursalBuscada. ¡Ultimas unidades! Precio " .$medicamento["precio"] .". Hay " .$medicamento["stock"] ." unidades en stock.");
            break;
        }else if($medicamento["nombre"]==$medicamentoBuscado && $medicamento["sucursal"]==$sucursalBuscada){
            echo("El medicamento $medicamentoBuscado está disponible en $sucursalBuscada. Precio " .$medicamento["precio"] .". Hay " .$medicamento["stock"] ." unidades en stock.");
            break;
        }
    }
        if($medicamento["nombre"]!=$medicamentoBuscado || $medicamento["sucursal"]!=$sucursalBuscada){
            echo("El medicamento que has introducido no se encuentra en la sucursal seleccionada.");
        }

?>