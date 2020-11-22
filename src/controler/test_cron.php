<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include("../class/config.php");
?>
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Test de Cron</title>
      </head>
      <body>
        <!-- Insérer ici le code de mail php -->
<?php
try {
    $dateCal = new DateTime();
    // $dateCal = date('Y-m-d');
    // $dateCal = date('2019-12-02');
    error_log("lancement du calcul".var_dump($dateCal), 0);
    $output = UserCtrl::CalculTirage($dateCal);
    echo var_dump($output);
    	 
} 
 catch (Exception $e) {
  $respond->code= -5;
  error_log(var_dump($e.getMessage()));
  $respond->message= "Le site a rencontré un problème.";
}
// Destinataire
$to = "linda49martin@gmail.com";
// Sujet
$subject = 'Test de planification de tâche Cron';
 
// Message
$message = '
<html>
  <head>
    <title>Test Cron</title>
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td align="center">
          <p>
            Ceci est un test qui prouve que Cron fonctionne correctement !
          </p>
          <p>
            Chouette, hein ?
          </p>
        </td>
      </tr>
    </table>
  </body>
</html>
';
 
// Pour envoyer un mail HTML, l en-tête Content-type doit être défini
$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
 
// En-têtes additionnels
$headers .= 'From: Mail de test <no-reply@csecogelec.fr>' . "\r\n";
 
// Envoie
$resultat = mail($to, $subject, $message, $headers);


echo "Fin";
?>
      </body>
    </html>


    
