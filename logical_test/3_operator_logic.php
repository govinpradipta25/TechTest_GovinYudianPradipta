
<form method="post" action="">
    Masukkan bilangan : <input type="text" name="bilangan"><br>
    <input type="submit" name="submit" value="Proses">    
</form>
<?php
if(isset($_POST['submit'])){
    $bilangan = $_POST['bilangan'];
    if ($bilangan % 2 == 0){
        echo $bilangan . " adalah bilangan genap";
    
    }else {
        echo $bilangan . " adalah bilangan ganjil";
    }
}

?>