<?php
   // Démarrage ou reprise de session
   session_start();

/************************ CONSTANTES *************************/

define("NOMBRE_DE_PIONS", 8);
define("TAILLE_COMBINAISON", 4);
define("TAILLE_PLATEAU", 6);
define("NOMBRE_DE_COUPS_MAXI", 10);
// Les constantes de type tableau ne sont disponibles qu'à partir de PHP 7
define("PIONS", array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H')); // ou : define("PIONS", range('A', 'H'));
define("FUSEAU_HORAIRE", "Europe/Paris");


/************************* FONCTIONS *************************/

// Tirage au sort et renvoi d'une combinaison à trouver par le joueur
function tire_combinaison_à_trouver() {
   $pions = PIONS;
   // mélange aléatoire du tableau contenant toutes les valeurs de pions possibles
   shuffle($pions);
   // combinaison à trouver = les premiers éléments du tableau mélangé
   $combinaison_à_trouver = array_slice($pions, 0, TAILLE_COMBINAISON, true); // possible également : fonction array_splice
   return $combinaison_à_trouver ;
}


// Initialisation des variables de session au début d'une nouvelle partie
function initialise_partie() {
	$_SESSION['partie_en_cours'] = true;
	$_SESSION['coups_joués'] = 0;
	$_SESSION['plateau'] = array();
	$_SESSION['combinaison_à_trouver'] = tire_combinaison_à_trouver();
}


// Affichage du formulaire de saisie d'une combinaison
function écrit_formulaire() {
	echo "<form method=\"post\" action=\"".$_SERVER['SCRIPT_NAME']."\">\n";
	echo "    <input type=\"text\" name=\"combinaison\" maxlength=\"".TAILLE_COMBINAISON."\" autofocus>\n";
	echo "    <input type=\"submit\" name=\"envoi_combinaison\" value=\"Jouer\">\n";
	echo "</form>\n";
}


// La combinaison saisie par l'utilisateur est-elle valide ?
function vérifie_validité_saisie_utilisateur($combinaison_jouée) {
	// la saisie est valide par défaut
	$validité = true;
	// le nombre de caractères saisis est-il correct ?
	if (strlen($combinaison_jouée) != TAILLE_COMBINAISON)
		$validité = false;
   // chaque caractère est-il dans la liste autorisée par le jeu ?
	if ($validité)
		for ($caractère = 0; $caractère < TAILLE_COMBINAISON; $caractère++)
			if (!in_array($combinaison_jouée[$caractère], PIONS)) {
				$validité = false;
				break;
			}
   // chaque caractère est-il unique dans la chaîne saisie ? (càd présent une seule fois)
	if ($validité)
      for ($caractère = 0; $caractère < TAILLE_COMBINAISON; $caractère++)
			if (substr_count($combinaison_jouée, $combinaison_jouée[$caractère]) > 1 ) {
				$validité = false;
				break;
			}
	return $validité;
}


// Calcul du nombre de pions bien placés et mal placés pour une combinaison jouée
function calcule_correspondances($combinaison_jouée) {
	// initialisation des compteurs de pions bien placés et mal placés
	$pions_bien_placés = 0;
	$pions_mal_placés = 0;
	// parcours des indices des pions de la combinaison à trouver
	for ($i = 0; $i < TAILLE_COMBINAISON; $i++)
		// recherche des pions bien placés : comparaison des pions de positions identiques
		// dans la combinaison jouée et dans la combinaison à trouver
		if ($_SESSION['combinaison_à_trouver'][$i] == $combinaison_jouée[$i])
			$pions_bien_placés++;
		// recherche des pions mal placés
		else
			// parcours des indices des pions de la combinaison jouée
			for ($j = 0; $j < TAILLE_COMBINAISON; $j++)
				 if ($_SESSION['combinaison_à_trouver'][$i] == $combinaison_jouée[$j]) {
					$pions_mal_placés++;
					break;
				 }
   return array("pions_bien_placés" => $pions_bien_placés, "pions_mal_placés" => $pions_mal_placés);
}


// Gestion d'un coup : ajout de la dernière combinaison jouée au plateau de jeu
function joue_un_coup($combinaison_jouée) {
	// incrémentation du compteur de nombre de coups
	$_SESSION['coups_joués']++;
	// conversion de la combinaison jouée en tableau et stockage dans le plateau de jeu
	$_SESSION['plateau'][$_SESSION['coups_joués']] = str_split($combinaison_jouée);
	// calcul et stockage du nombre de pions bien placés et mal placés pour la combinaison jouée
	$résultats = calcule_correspondances($combinaison_jouée);
	$_SESSION['plateau'][$_SESSION['coups_joués']]['pions_bien_placés'] = $résultats['pions_bien_placés'];
	$_SESSION['plateau'][$_SESSION['coups_joués']]['pions_mal_placés'] = $résultats['pions_mal_placés'];
}


// Affichage du plateau de jeu
function affiche_plateau_de_jeu() {
	// parcours des combinaisons jouées
	for ($ligne = 1; $ligne <= $_SESSION['coups_joués']; $ligne++) {
		echo "<p>$ligne) " ;
		// affichage des pions de la combinaison
		for ($colonne = 0; $colonne < TAILLE_COMBINAISON; $colonne++)
			echo $_SESSION['plateau'][$ligne][$colonne];
		// affichage des indications de placement de la combinaison
		echo "   ", $_SESSION['plateau'][$ligne]['pions_bien_placés'];
		echo " ", $_SESSION['plateau'][$ligne]['pions_mal_placés'];
		echo "</p>\n";
	}
}

?>