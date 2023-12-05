# recherche_sequentielle_2(x,t)
# """ Cette fonction renvoie l'indice (position) de la première
# occurrence d'un nombre entier x dans un tableau t non trié ou -1 si x n'est pas présent """

def recherche_sequentielle_2(x,t):
  """ Cette fonction renvoie l'indice (position) de la première
  occurrence d'un nombre entier x dans un tableau t non trié ou -1 si x n'est pas présent """
  i = 0
  while i < len(t) and t[i] != x:
    i = i + 1
  if i < len(t):
    return i
  else:
    return -1
    
    
t = [1,2,3,4,5,6,7,8,9,10]
x = 11
print(recherche_sequentielle_2(x,t))