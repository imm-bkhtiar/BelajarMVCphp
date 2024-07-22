<?php 
 class Daftar_contact {
  private $tabel = 'contact';
  private $db;

    public function __construct()
    {
      $this->db = new Database;
    }


    public function getContact(){
      $this->db->query("SELECT * FROM $this->tabel ORDER BY id DESC");
      return $this->db->resultSet();
    }

    public function getContactById($id){
      $this->db->query("SELECT * FROM $this->tabel WHERE id=:id");
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addContact($data){
      $query = "INSERT INTO contact VALUES (NULL, :nama, :nohp, :email) ";
      $this->db->query($query);
      $this->db->bind('nama', $data["nama"]);
      $this->db->bind('nohp', $data["nohp"]);
      $this->db->bind('email', $data["email"]);
      
      $this->db->execute();

      return $this->db->listenChange();
    }

    public function deleteContact($id){
      $query = "DELETE FROM contact WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->listenChange();
    }

 }


 ?>