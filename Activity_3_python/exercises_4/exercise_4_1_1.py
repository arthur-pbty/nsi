# Ecrire une fonction carre() qui retourne le carré d'un nombre:
# >>> print(carre(11.11111))
# 123.4567654321

# Le script prend en compte : 
# les erreurs de saisie de l'utilisateur, 
# les nombres entiers et les nombres décimaux, 
# les nombres négatifs et les nombres positifs, 
# les calcules exemple : 10**3, 10/3, (1/4)*5

def carre(a):
   return a*a

while True:
   try:
      a = input("Entrez un nombre: ")
      a = float(a)
      break
   except ValueError:
      try:
         a = eval(a)
         break
      except:
         print("Oops!  Ce n'était pas un nombre valide.  Essayez encore...")
print(str(a) + "² =", "{:.10g}".format(carre(a)))

# Amélioration du script avec une interface graphique

from tkinter import *

def carre(a):
   return a*a

def carre2():
   a = entree.get()
   try:
      a = float(a)
   except ValueError:
      try:
         a = eval(a)
      except:
         a = "Oops!  Ce n'était pas un nombre valide.  Essayez encore..."
   sortie.configure(text = str(a) + "² = " + "{:.10g}".format(carre(a)))

fenetre = Tk()
fenetre.title("Calculatrice de carré")
fenetre.geometry("300x100")

entree = Entry(fenetre, width=30)
entree.pack()

bouton = Button(fenetre, text="Calculer", command=carre2)
bouton.pack()

sortie = Label(fenetre, text="")
sortie.pack()

fenetre.mainloop()