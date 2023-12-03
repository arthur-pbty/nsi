# Avec une boucle while et la fonction carre(), écrire un script qui affiche le carré des nombres entiers de 1 à 100:
# >>>
# 1² = 1
# 2² = 4
# 3² = 9
# ...
# 99² = 9801
# 100² = 10000
# Fin du programme

def carre(a):
   return a*a

i = 1
while i <= 100:
   print(str(i) + "² =", carre(i))
   i += 1
print("Fin du programme")