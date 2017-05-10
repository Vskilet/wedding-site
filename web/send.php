<?php
	ini_set('display_errors', 'On');

	$name = $_POST['Name'];
	$subject = $_POST['Subject'];
	$message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
      </head>
      <body>
       <p>Voici les anniversaires à venir au mois d\'Août !</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
        </tr>
        <tr>
         <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
        </tr>
       </table>
      </body>
     </html>
     ';

	$headers = 'From: nous@constanceetvictor.fr' . "\r\n" .
	    'Reply-To: nous@constanceetvictor.fr' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	//mail($mail, $subject, $message, $headers);
	mail('nous@constanceetvictor.fr', 'Test', $message, $headers);
?>
