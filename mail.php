<?php
  $Name = $HTTP_POST_VARS['Name'];
  $Betreff = $HTTP_POST_VARS['Betreff'];
  $SenderMailAdr =$HTTP_POST_VARS['Mail'];
  $Nachricht = $HTTP_POST_VARS['Nachricht'];
  
        $mailtext.="Name: " . htmlspecialchars($Name);
		$mailtext.="\n" . "Absender: " . htmlspecialchars($SenderMailAdr);
        $mailtext.="\n" . "\n";
        $mailtext.="Nachricht:" . "\n";

        $mailtext.= htmlspecialchars($Nachricht);
        
		$Empfaenger = "XXXXXXXX@googlemail.com";
	
		$header = 'From: noreply@audiomax-campusradio.de' . "\r\n" .
		    'Reply-To: noreply@audiomax-campusradio.de' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

	mail($Empfaenger,"Kontaktformular - " . $Betreff ,$mailtext, $header);

        if(mail==true){
          echo "<b style='color:green;'>Ihre Mail wurde erfolgreich versendet</b>";
        }else{
          echo "<b>Ihre Mail könnte leider nicht versendet werden</b>";
        }

?>
					