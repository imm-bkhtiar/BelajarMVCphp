<?php 
class Contact extends Controller {
  public function index() {
    $data['judul'] = "Daftar Contact";
    $data['contact'] = $this->model('daftar_contact')->getContact();
    $this->view('templates/header', $data);
    $this->view('contact/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id) {
    $data['judul'] = "Detail Contact";
    $data['contact'] = $this->model('daftar_contact')->getContactById($id);
    $this->view('templates/header', $data);
    $this->view('contact/detail', $data);
    $this->view('templates/footer');
  }

  public function add(){
    if( $this->model('daftar_contact')->addContact($_POST) > 0){
      Flasher::setFlash('BERHASIL', "Ditambahkan", "success");
      header("location: ".DEFAULTURL."contact");
    } else {
      Flasher::setFlash('GAGAL', "ditambahkan", "danger");
      header("location: ".DEFAULTURL."contact");
    }
  }

  public function delete($id){
    if( $this->model('daftar_contact')->deleteContact($id) > 0){
      Flasher::setFlash('BERHASIL', "Dihapus", "success");
      header("location: ".DEFAULTURL."contact");
    } else {
      Flasher::setFlash('GAGAL', "Dihapus", "danger");
      header("location: ".DEFAULTURL."contact");
    }
  }
}



 ?>