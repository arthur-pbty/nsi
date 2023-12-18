# Ecrire une fonction qui retourne une grille de numéros du jeu Euro Millions.
# On utilisera la fonction sample() du module random.

from random import sample

def euromillions():
    return sample(liste,5) + sample(etoiles,2)


liste = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50]
etoiles = [1,2,3,4,5,6,7,8,9,10,11]
print(euromillions())