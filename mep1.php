<?php
function estBissextile($annee)
{
    if (($annee % 400) == 0) {
        return true;
    }
    if (($annee % 100) == 0) {
        return false;
    }
    if (($annee % 4) == 0) {
        return true;
    }

    return false;
}

echo "Test de 1600 : ";
var_dump(estBissextile(1600));
echo "Test de 1700 : ";
var_dump(estBissextile(1700));
echo "Test de 1704 : ";
var_dump(estBissextile(1704));
echo "Test de 1705 : ";
var_dump(estBissextile(1705));

function estValideJour($annee, $mois, $jour)
{
    if ($jour < 1)
     {
        return false;
    }
    if (($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11 ) && $jour <= 30) {
        return true;
    }
    if ($mois == 2) {
        if ((estBissextile($annee) && $jour <= 29) || $jour <= 28) {
        return true;
        }
        else {
            return false;
        }
    }
    if ($jour <= 31) {
        return true;
    }
    
}
function estValideMois($mois)
{
    if (($mois >= 1) && $mois <= 12) {
       return true; 
    }
    return false;
}

function estValideAnnee($annee)
{
    if ($annee <> 0) {
        return true;
    }
    return false;
}

function estValide($annee, $mois, $jour)
{
    if ((estValideAnnee($annee)) && estValideMois($mois) && estValideJour($annee, $mois, $jour)) {
        return true;
    }
    return false;
}
echo "test du 30 février : ";
var_dump(estValideJour(2023,2,30));    
    

    




