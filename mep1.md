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
            SINON retourner FAUX
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
```
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

FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : entier
 DÉBUT   
    SI annee = annee2
       ET mois1 = mois2
       ET jour1 = jour2 ALORS
       renvoyer 0
    FINSI
    SI annee1 < annee2 ALORS
       renvoyer -1
    FINSI
    SI année1 = annee2
       ET mois1 < mois2
       renvoyer -1
    FINSI
    SI année1 = annee2
       ET mois1 = mois2
       ET jour1 < jour2 ALORS
       renvoyer -1
    FINSI
    Renvoyer 1
FIN

FONCTION afficherDuréeSheure(h, heure)
  DÉBUT
    SI h = 1 ALORS
      revoyer (heure <- s + " heure")
      SINON SI h = 0 ALORS
        renoyer (heure <- "") 
      FINSI   
    FINSI
    renvoyer (heure <- h + " heures")
  FIN

  FONCTION afficherDuréeminute(min, minute)
   DEBUT 
    Si min = 1 ALORS
       renvoyer ( minute <- min + " minute")
       SINON SI min = 0 ALORS
           renvoyer ( minute <- "") 
       FINSI 
    FINSI
    renvoyer (minute <- min + " minutes")
  FIN
 
  FONCTION afficherDuréeseconde(s, seconde)
  DEBUT 
    Si s = 1 ALORS
       renvoyer ( seconde <- s + " seconde")
       SINON SI s = 0 ALORS
           renvoyer ( seconde <- "") 
       FINSI 
    FINSI
    renvoyer (seconde <- s + " secondes")
  FIN

PROCÉDURE afficherDurée(var secondes)
 DÉBUT
   var h
   var min
   var s
   DECLARER heure
   DECLARER minute
   DECLARER seconde
   h = secondes / 3600 
   min = (secondes / 60) - h * 60
   s = secondes % 3600
   
   # Pour les heures

   afficherDuréeSheure(h, heure)

   # Pour les minutes
  
   afficherDuréeminute(min, minute)
    
   # Pour les secondes

   afficherDuréeseconde(s, seconde)
   
   afficher (heure " " + minute " " + seconde)

 FIN
```