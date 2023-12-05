# recherche_sequentielle_3(x,t)
# """ Cette fonction renvoie l'indice (position) d'un nombre entier x
# dans un tableau t non trié ou -1 si x n'est pas présent (en utilisant une boucle bornée)"""

def recherche_sequentielle_3(x,t):
  """ Cette fonction renvoie l'indice (position) d'un nombre entier x
  dans un tableau t non trié ou -1 si x n'est pas présent (en utilisant une boucle bornée)"""
  for i in range(len(t)):
    if t[i] == x:
      return i
  return -1


t = [1,2,3,4,5,6,7,8,9,10]
x = 4
print(recherche_sequentielle_3(x,t))