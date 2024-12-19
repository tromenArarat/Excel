<?php

$juguetes[0] = ["juguete"=>"Castillo inflable acuático",
                    "categoría"=>"agua",
                        "precio"=>12300,
                            "stock"=>1];
$juguetes[1] = ["juguete"=>"PlayStation 5",
                    "categoría"=>"videojuegos",
                        "precio"=>80000,
                            "stock"=>1];
$juguetes[2] = ["juguete"=>"Flota flota",
                    "categoría"=>"agua",
                        "precio"=>2500,
                            "stock"=>1];
$juguetes[3] = ["juguete"=>"GameBoy Color",
                    "categoría"=>"videojuegos",
                        "precio"=>25000,
                            "stock"=>1];
$juguetes[4] = ["juguete"=>"Escafandra",
                    "categoría"=>"agua",
                        "precio"=>5000,
                            "stock"=>1];

$pedidos[0] = ["nombre"=>"Jaimito",
                    "edad"=>79,
                        "pedido"=>"Family game",
                            "categoría"=>"videojuegos"];
$pedidos[1] = ["nombre"=>"El chavo",
                    "edad"=>95,
                        "pedido"=>"Castillo inflable acuático",
                            "categoría"=>"agua"];
$pedidos[2] = ["nombre"=>"Bart Simpson",
                    "edad"=>43,
                        "pedido"=>"Submarino",
                            "categoría"=>"agua"];
$pedidos[3] = ["nombre"=>"Mafalda",
                    "edad"=>60,
                        "pedido"=>"Escafandra",
                            "categoría"=>"agua"];
$pedidos[4] = ["nombre"=>"Calvin",
                    "edad"=>35,
                        "pedido"=>"GameBoy",
                            "categoría"=>"videojuegos"];

/*
Quiero distribuir los regalos de acuerdo a los pedidos. 
Si lo pedido no está, regalar algo que sea de la misma categoría.
*/

$regalos = [];

$n = count($pedidos);
$m = count($juguetes);

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $m; $j++) { 
        if($pedidos[$i]["pedido"]==$juguetes[$j]["juguete"]
            &&$juguetes[$j]["stock"]!=0){
            
                $regalos[$i]=["nombre"=>$pedidos[$i]["nombre"],
                            "juguete"=>$juguetes[$j]["juguete"]];
            // Actualizo stock
            $juguetes[$j]["stock"]--;
            break;
        }else{
            // Si no coincide el pedido por nombre busco por categoría
            if($pedidos[$i]["categoría"]==$juguetes[$j]["categoría"]
                    &&$juguetes[$j]["stock"]!=0){
                        $regalos[$i]=["nombre"=>$pedidos[$i]["nombre"],
                        "juguete"=>$juguetes[$j]["juguete"]];
                    
                    // Actualizo stock
                        $juguetes[$j]["stock"]--;
                    break;
                    }  
        }
    }
}

// IMPRESIÓN
for ($i=0; $i < count($regalos); $i++) { 
    echo $regalos[$i]["nombre"] . ": " . $regalos[$i]["juguete"];
    echo "\n";
}
