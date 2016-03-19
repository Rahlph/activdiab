
select tmpstamp, glycemie, uniteInsuline from utilisateur, rapport where (utilisateur.id = rapport.id);