<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.
require './classes/StrUtils.php';

$myStr = new StrUtils('Nous sommes entrain de voir l\'objet' );

echo "<p>" . $myStr ->bold() . "</p>";
echo "<p>" . $myStr ->italic() . "</p>";
echo "<p>" . $myStr ->underline() . "</p>";
echo "<p>" . $myStr ->capitalize() . "</p>";
