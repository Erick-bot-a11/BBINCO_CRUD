<?php
    require_once "../models/Tarea.php";
    // Agregar los encabezados CORS
header("Access-Control-Allow-Origin: http://localhost:5000"); // Reemplaza con tu origen específico
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");
    header("Content-Type: application/json");
    $array_devolver=[];
    switch($_SERVER["REQUEST_METHOD"]){
        
        case "GET":
             if(isset($_GET["all"])){ //Retornar todos los registros
                 echo json_encode(Tarea::getAll());
             }
             if(isset($_GET["id"])){ //Retornar todos los registros
                echo json_encode(Tarea::getWhere($_GET["id"]));
            }
            break;
        case "POST":
            if (isset($_POST["delete"])) {
                // Eliminar el registro con el id especificado
                $id = $_POST["id"];
                $result = Tarea::delete($id); // 
                if ($result) {
                    echo json_encode(true);
                } else {
                    echo json_encode(false);
                }
            } 
            

            if($_POST['actualizar'] == "false"){
                if($_POST['titulo'] != null) {
                    $completada = ($_POST['completada'] == "true") ? "1" : "0";
                    if(Tarea::insert($_POST['titulo'],$_POST['descripcion'], $_POST['vencimiento'],$completada)){
                        //http_response_code(300);
                        echo json_encode(true);
                    }else{
                    //    http_response_code(400);
                        echo json_encode(false);
                    }
                }
            }else{
                $completada = ($_POST['completada'] == "true") ? "1" : "0";
                if(Tarea::update($_POST['titulo'],$_POST['descripcion'], $_POST['vencimiento'],$completada,$_POST['id'])){
                    //http_response_code(300);
                    echo json_encode(true);
                }else{
                //    http_response_code(400);
                    echo json_encode(false);
                }
            
            }
            break;
        default: break;
    }