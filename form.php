<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- fichiers css de bootstrap en cas de problème de connexion -->
    <!--
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css.map">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css.map">
    -->
    <link rel="stylesheet" href="form.css">
	
</head>
<body>

<?php
error_reporting(0);

ini_set("SMTP","smtp.gmail.com"); 
ini_set("smtp_port","465");

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$reponse=$_POST['reponse'];
$message='Bonjour '.$prenom.' '.$nom.'! Merci d\'avoir participé au jeu/concours de Data Expertise. Votre réponse à bien été enregistrée: '.$reponse.'.' ;
$header="From: ecbidon@gmail.fr"."\r\n".'MIME-Version: 1.0' . "\r\n" .'Content-type: text/html; charset=utf-8';

?>

<h1 class="mt-5">
	<?php 
	if(mail($email,'jeu/concours Data Expertise',$message,$header))
		echo 'Merci '.$prenom. ' '.$nom.' ! Un mail vous a été envoyé à '.$email.'.'; 
	else
		echo 'L\'envoi du mail a échoué. Nous nous excusons de l\'inconvénient, veuillez réessayer plus tard.';
	?>
</h1>

</body>
</html>