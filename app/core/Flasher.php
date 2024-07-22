 <?php 
  class Flasher {
    public static function setFlash($pesan, $aksi, $tipe){
      $_SESSION["flash"] =[
        "pesan" => $pesan,
        "aksi" => $aksi,
        "tipe" => $tipe
      ];
    }

    public static function flash(){
      if (isset($_SESSION["flash"])) {
        $pesan = $_SESSION['flash']["pesan"];
        $aksi = $_SESSION['flash']["aksi"];
        $tipe = $_SESSION['flash']["tipe"];

        echo "<div class='alert alert-$tipe' role='alert'>
                 Contact  <span class='fw-bold'>$pesan</span>  $aksi
              </div>";
      unset($_SESSION['flash']);
      }
    }
  }
 
 
 
?>