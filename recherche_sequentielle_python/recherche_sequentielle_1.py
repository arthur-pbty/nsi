# recherche_sequentielle_1(x,t)
# """ Cette fonction renvoie l'indice (position) de la première
# occurrence d'un nombre entier x dans un tableau t non trié """

def recherche_sequentielle_1(x,t):
  """ Cette fonction renvoie l'indice (position) de la première
  occurrence d'un nombre entier x dans un tableau t non trié """
  i = 0
  while t[i] != x:
    i = i + 1
  return i + 1
    

t = [1,2,3,4,5,6,7,8,9,10]
x = 5
print(recherche_sequentielle_1(x,t))