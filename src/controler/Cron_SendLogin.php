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

// Sujet
$subject = "[cseCogelec] Calendrier de l'avant"; 
// Pour envoyer un mail HTML, l en-tête Content-type doit être défini
$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
 
// En-têtes additionnels
$headers .= 'From: Mail de test <no-reply@csecogelec.fr>' . "\r\n";
$site = 'https://calendrier2noel.csecogelec.fr/';
    error_log("Send Login". 0);
    $output = UserCtrl::GetAllUser();
    foreach ($output as $od) {
      if ($od['email'] =='lmartin@cogelec.fr'){
          // Destinataire
          $to = $od['email']  ;
          // Message
          $message = '
          <html>
            <head>
              <title>login calendrier</title>
            </head>
          <body>
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td align="center">
                <p>
                Bonjour à tous,
                Le site du calendrier de noel arrive bientôt, on te rappelle comment tu peux y accéder
                Login : '.$od['ssoid'].' <br>
                Mot de passe : '.$od['pwd_hash'].' <br>  
                Site : '.$site.' <br>  
                Bonne participation à tous.
                Votre équite du CSE
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
        // Envoie
        $resultat = mail($to, $subject, $message, $headers);
        
        }
      
    }
    
    
    echo var_dump($output);
    	 
} 
 catch (Exception $e) {
  $respond->code= -5;
  error_log(var_dump($e.getMessage()));
  $respond->message= "Le site a rencontré un problème.";
}

 

 

 



echo "Fin";
?>
      </body>
    </html>


    
