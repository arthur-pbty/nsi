# Ecrire une fonction qui retourne la factorielle d'un nombre entier N.
# On rappelle que : N ! = 1×2×...×(N-1)×N
# >>> print(factorielle(50))
# 30414093201713378043612608166064768844377641568960512000000000000

def factorielle(N):
   if N == 0:
      return 1
   else:
      return N * factorielle(N-1)
   
while True:
   try:
      N = input("Entrez un nombre entier: ")
      N = int(N)
      break
   except ValueError:
      try:
         N = eval(N)
         N = int(N)
         break
      except:
         print("Oops!  Ce n'était pas un nombre valide.  Essayez encore...")
print("factorielle(" + str(N) + ") =", factorielle(N))

# Amélioration du script avec une interface graphique

from tkinter import *

def factorielle(N):
   if N == 0:
      return 1
   else:
      return N * factorielle(N-1)
   
def factorielle2():
   N = entree.get()
   try:
      N = int(N)
   except ValueError:
      try:
         N = eval(N)
         N = int(N)
      except:
         N = "Oops!  Ce n'était pas un nombre valide.  Essayez encore..."
   sortie.configure(text = "factorielle(" + str(N) + ") = " + str(factorielle(N)))

fenetre = Tk()
fenetre.title("Calculatrice de factorielle")
fenetre.geometry("300x100")

entree = Entry(fenetre, width=30)
entree.pack()

bouton = Button(fenetre, text="Calculer", command=factorielle2)
bouton.pack()

sortie = Label(fenetre, text="")
sortie.pack()

fenetre.mainloop()


# Comparez avec le résultat de la fonction factorial() du module math.

from math import factorial
print("factorial(" + str(N) + ") =", factorial(N))