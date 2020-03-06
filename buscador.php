<?php require 'class/class.db.php';

$db= new DB();

$ano = $_POST['ano'];

if($_POST['action']==1) {
$sql=$db->select("SELECT * FROM termos WHERE ano= '$ano'");

if($db->rows($sql)){
  while($yy = $db->expand($sql)) {
    echo '<option value="'.$yy['urli'].'">'.$yy['titulo'].'</option>';
  }
}
}

if ($_POST['action']==2) {

  $sql=$db->select("SELECT * FROM balancos WHERE ano= '$ano'");

  if($db->rows($sql)){
    while($yy = $db->expand($sql)) {
      echo '<option value="'.$yy['urli'].'">'.$yy['titulo'].'</option>';
    }
  }

}
