<?php
$message = "La Vie aquatique (The Life Aquatic with Steve Zissou), film américain sorti en 2004,</br>\n
est le quatrième long-métrage réalisé par Wes Anderson. Il est dédié à l'océanographe français</br>\n
Jacques-Yves Cousteau et s'inspire librement de sa vie sur un ton parodique.</br>\n
Le film est une comédie dramatique qui, sous un aspect fantaisiste, aborde des thèmes forts comme la</br>\n
famille, le deuil, la vengeance, l'angoisse de vieillir ou l'échec.";
$message = str_replace('e','',$message);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 11 PHP</title>
	</head>
	<body>
	<h1>Soit une variable contenant la chaîne :.</h1>
		<p><h2>La Vie aquatique (The Life Aquatic with Steve Zissou), film américain sorti en 2004,
		est le quatrième long-métrage réalisé par Wes Anderson. Il est dédié à l'océanographe français
		Jacques-Yves Cousteau et s'inspire librement de sa vie sur un ton parodique.
		Le film est une comédie dramatique qui, sous un aspect fantaisiste, aborde des thèmes forts comme la
		famille, le deuil, la vengeance, l'angoisse de vieillir ou l'échec.
	</h2></p>
	<p><?= $message ?></p>
</body>
</html>
