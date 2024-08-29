<?php
require_once "../connection/Connection.php";
class Tarea {
        public static function insert($titulo,$descripcion,$vencimiento,$completada){
            $db =new Connection();
            $query = "INSERT INTO tareas (titulo,descripcion,vencimiento,completada)
                      VALUES('".$titulo."','".$descripcion."','".$vencimiento."','".$completada."')" ;
            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;


            
        }

        public static function update($titulo,$descripcion,$vencimiento,$completada,$id){
            $db =new Connection();
            $query = "UPDATE tareas SET titulo = '".$titulo."', 
                    descripcion = '".$descripcion."', 
                    vencimiento = '".$vencimiento."', 
                    completada = '".$completada."' 
                    WHERE id = '".$id."'";
            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;

        }
        
        public static function delete($id) {
            $db = new Connection(); 
            $id = $db->real_escape_string($id);
            $query = "DELETE FROM tareas WHERE id = '$id'";
            $db->query($query);
            if ($db->affected_rows > 0) {
                return true; 
            }
        
            return false; 
        }

        public static function getAll() {
            $db =new Connection();
            $query = "SELECT * FROM tareas";

            $resultado = $db->query($query);
            $datos =[];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                        $datos[] = [
                           "id" => $row["id"],
                           "titulo" => $row["titulo"],
                           "descripcion" => $row["descripcion"] ,
                           "vencimiento" => $row["vencimiento"], 
                           "completada" => $row["completada"] 
                        ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function getWhere($id) {
            $db =new Connection();

            $query = "SELECT * FROM tareas WHERE id='" . $id . "' LIMIT 1";

            $resultado = $db->query($query);
            $datos =[];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        "id" => $row["id"],
                        "titulo" => $row["titulo"],
                        "descripcion" => $row["descripcion"] ,
                        "vencimiento" => $row["vencimiento"], 
                        "completada" => $row["completada"] 
                     ];
                }
                return $datos;
            }
            return $datos;
        }

        
    }
