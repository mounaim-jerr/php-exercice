1)
    <!-- dans fichier index.php -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="test.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" name="first">
<input type="text" class="form-control w-50 mt-5 ml-5" name="second">
<select name="slct" class="form-control w-50 mt-5 ml-5" id="">
<option value="+">+</option>
<option value="-">-</option>
<option value="/">/</option>
<option value="*">*</option>
</select>
<button type="submit" name="button" class="btn btn-primary btn-lg wt-50 mt-5 ml-5" >click here</button>
</form>
<!-- dans fichier index.php -->

<!-- ------------------------------ -->

<!-- dans fichier test.php -->
<?php

if (isset($_POST)){
   $prInput=$_POST["first"];
   $dxInput=$_POST["second"];

   if ($_POST["slct"]=="+"){
    $calc=$prInput+$dxInput;
   }
   else if ($_POST["slct"]=="-"){
    $calc=$prInput-$dxInput;
   }
   else if ($_POST["slct"]=="/"){
    $calc=$prInput/$dxInput;
   }
   else if ($_POST["slct"]=="*"){
    $calc=$prInput*$dxInput;
   }
   

    var_dump($calc);
}
?>
<!-- dans fichier test.php -->

2)
 <!-- dans fichier index.html -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="test.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" name="first">
<select name="slct" class="form-control w-50 mt-5 ml-5" id="">
<option value="mr">Mr</option>
<option value="mme">Mme</option>

</select>
<button type="submit" name="button" class="btn btn-primary btn-lg wt-50 mt-5 ml-5" >click here</button>
</form>
<!-- dans fichier index.php -->

<!-- ----------------------- -->

<!-- dans fichier test.php -->
<?php

if (isset($_POST)){
   $prInput=$_POST["first"];
   $sexe=$_POST["slct"];
   echo "hello ". $sexe." ".$prInput;  
} 
?>
<!-- dans fichier test.php -->


3)
<!-- dans fichier index.html -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="test.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" name="nmbr">
<input type="text" class="form-control w-50 mt-5 ml-5" name="nmbrmul">

<button type="submit" name="button" class="btn btn-dark btn-lg w-50 mt-5 ml-5" >click here</button>
</form>


<!-- dans fichier index.php -->

<!-- ----------------------- -->

<!-- dans fichier test.php -->
<?php

if (isset($_POST)){
   $prInput=$_POST["nmbr"];
   $dxInput=$_POST["nmbrmul"];
   $resultat;
   for($i=0;$i<=$dxInput;$i++)
   {
    $resultat=$prInput*$i;
    echo $prInput.' * '.$i.' = '.$resultat.'<br>';
   }  
} 
?>
<!-- dans fichier test.php -->


4)
<!-- dans fichier index.html -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="test.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="nom" name="nom">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="prenom" name="prenom">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="adress" name="adress">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="ville" name="ville">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="codepostal" name="codepostal">

<button type="submit" name="button" class="btn btn-dark btn-lg w-50 mt-5 ml-5" >click here</button>
</form>




<!-- dans fichier index.php -->

<!-- ----------------------- -->

<!-- dans fichier test.php -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php

if (isset($_POST)){
   $nominput=$_POST["nom"];
   $prenominput=$_POST["prenom"];
   $adressinput=$_POST["adress"];
   $villeinput=$_POST["ville"];
   $codepostalinput=$_POST["codepostal"];
   
} 

?>
<table class="table table-dark mt-3">
<thead>
<tr>
<th scope="col">nom</th>
<th scope="col">prenom</th>
<th scope="col">adress</th>
<th scope="col">ville</th>
<th scope="col">codepostal</th>


</tr>

</thead>
<tbody>
<tr>
    <td> <?php echo $nominput?> </td>
    <td><?php echo $prenominput?></td>
    <td><?php echo $adressinput?></td>
    <td><?php echo $villeinput?></td>
    <td><?php echo $codepostalinput?></td>
</tr>
</tbody>
</table>
<?php 
if ($prenominput=='' || $nominput=='' || $adressinput=='' || $villeinput=='' || $codepostalinput=='' )
{
    ?>
    <script>
alert('you forgot somthing');
</script>
<?php  
//sleep(10); 
//header('location: http://localhost/ex1');
exit();
}
?>

<!-- dans fichier test.php -->

6)
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="index.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="ht" name="ht">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="tva" name="tva">

<button type="submit" name="button" class="btn btn-dark btn-lg w-50 mt-5 ml-5" >click here</button>
</form>
<?php

if (isset($_POST['ht'])&&isset($_POST['tva'])){
   $htinput=$_POST["ht"];
   $tvainput=$_POST["tva"];
   $mnttvainput=$htinput*($tvainput/100);
   $prxttcinput=$htinput+$mnttvainput;
   ?>
   <table class="table table-dark mt-3">
<thead>
<tr>
<th scope="col">montant de tva</th>
<th scope="col">prix TTC</th>



</tr>

</thead>
<tbody>
<tr>
    <td> <?php echo $mnttvainput?> </td>
    <td><?php echo $prxttcinput?></td>
    
</tr>
</tbody>
</table>
 <?php  
   
} 

?>

5)
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="index.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="insert your mail please" name="mail">

<button type="submit" name="button" class="btn btn-dark btn-lg w-50 mt-5 ml-5" >click here</button>
</form>

<?php

if (isset($_POST['mail'])){
   $mailinput=$_POST["mail"];
  $navigat;
  if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
  $navigat= 'Internet explorer';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
   $navigat= 'Internet explorer';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
  $navigat= 'Mozilla Firefox';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
  $navigat= 'Google Chrome';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
  $navigat= "Opera Mini";
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
  $navigat= "Opera";
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
  $navigat= "Safari";
else
  $navigat= 'Something else';
  ?>
  
<table class="table table-dark mt-3">
<thead>
<tr>
<th scope="col">your mail</th>
<th scope="col">navigateur</th>
</tr>

</thead>
<tbody>
<tr>
    <td> <?php echo $mailinput?> </td>
    <td><?php echo $navigat?></td>
    </tr>
</tbody>
</table>
<?php
} 
?>





