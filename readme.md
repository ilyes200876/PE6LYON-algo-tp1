```
FONCTION estBissextile(var annee)
DÉBUT
    /*
        1600 => bissextile
        1700 => PAS bissextile
        1704 => bissextile
        1705 => PAS bissextile
    */
    SI annee divisible par 400 ALORS
        Renvoyer VRAI
    FINSI
    SI annee divisible par 100 ALORS
        Renvoyer FAUX
    FINSI
    SI annee divisible par 4 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN

FONCTION estValideJour(var annee, var mois, var jour)
DÉBUT
    SI jour < 1 ALORS
        Renvoyer FAUX
    FINSI
    SI (mois = 4
        OU mois = 6
        OU mois = 9
        OU mois = 11)
        ET jour <= 30 ALORS
        Renvoyer VRAI
    FINSI
    SI mois = 2 ALORS
        SI (estBissextile(annee) ET jour <= 29)
            OU jour <= 28 ALORS
            Renvoyer VRAI
        FINSI
    FINSI
    SI jour <= 31 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN

FONCTION estValideMois(var mois)
DÉBUT
    SI mois >= 1 
        ET mois <= 12 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN

FONCTION estValideAnnee(var annee)
DÉBUT
    SI annee <> 0 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN

FONCTION estValide(var annee, var mois, var jour)
DÉBUT

    SI estValideAnnee(annee)
        ET estValideMois(mois)
        ET estValideJour(annee, mois, jour) ALORS
        Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN


```