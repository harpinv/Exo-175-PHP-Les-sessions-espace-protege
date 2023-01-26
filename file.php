<?php
$motDePasse = "Bonbon";

if($_POST['mots'] === $motDePasse) {
    echo "Le mots de passe et correct";
} else {
    echo "Le mot de passe est incorrect";
}