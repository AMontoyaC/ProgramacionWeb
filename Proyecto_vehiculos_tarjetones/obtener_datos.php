<?php

if(isset($_POST['get_chart'])) {
    requiere 'conexion.php';
    $conexion = new conexion();
    $cone=$conexion->conectarADO();

    $cont=0;

    $recordSet =&$cone->Execute("Select * from propietario ");
    while(!$recordSet->EOF){
            $recordSet->fields[1];
            $recordSet->MoveNext();
            $cont++;
    }

    $values[0] = array('tipo','cantidad')
        for($i=1;$i<=$num_grafico;$i++){
                $num=0;
                $tipo="";
                $recordSet=&$cone->Execute(" ");
                while(!$recordSet->EOF){
                    $tipo=$recordSet->fields[10];
                    $recordSet1=&$cone->Execute(" ");
                        while(!$recordSet1->EOF{
                        $recordSet->MoveNext();
                        $num++;

                        }
                        $recordSet->MoveNext();

                }
                $values[$i]=array($tipo,$num);
        }
        
        
    echo json_encode($values);
    exit;
}

?>