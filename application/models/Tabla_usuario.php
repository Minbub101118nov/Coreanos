<?php
class Tabla_usuario extends CI_Model{
private $tabla="usuario";

public function __construct(){
parent::__construct();
}

public function select_all(){
$query=$this->db->get($this->tabla);
return $query->result();
}

public function select($contraints){
$query=$this->db->get_where($this->tabla,$contraints);
return $query->result();
}
public function select_order_by_asc($contraints,$campo="nombre_usuario"){
$this->db->order_by($campo,"ASC");
$query=$this->db->get_where($this->tabla,$contraints);
return $query->result();
}
public function insert($data){
$result=$this->db->insert($this->tabla,$data);
if($this->db->affected_rows()>0){
return TRUE;
}
else{
return FALSE;
}
}
public function update($data,$id_usuario){
$this->db->set($data);
$this->db->where("id_usuario",$id_usuario);
$result=$this->db->update($this->tabla,$data);
if($this->db->affected_rows()>0){
return TRUE;
}
else{
return FALSE;
}
}
public function delete($id_usuario){
$this->db->where("id_usuario",$id_usuario);
$result=$this->db->delete($this->tabla);
if($this->db->affected_rows()>0){
return TRUE;
}
else{
return FALSE;
}
}
public function validar_usuario($email,$password){
  // echo $email;
$this->db->select("usuario.*");
$this->db->from($this->tabla);
$this->db->where("email_usuario",$email);
$this->db->where("password =SHA2('".$password."',0)");

$resultado=$this->db->get()->result();
// print_r($resultado);
if(sizeof($resultado) > 0){
  return $resultado[0];
}
  else{
    return NULL;
  }
}
}
?>
