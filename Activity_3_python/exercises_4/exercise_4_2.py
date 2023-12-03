# Ecrire une fonction airedisque() qui retourne l'aire de la surface d'un disque de rayon R.
# >>> print(airedisque(2.5))
# 19.6349540849

# Ajouter un paramètre qui précise l'unité de mesure
# >>> print(airedisque2(4.2, 'cm'))
# 55.4176944093 cm²

# Le script prend en compte : 
# les erreurs de saisie de l'utilisateur, 
# les nombres entiers et les nombres décimaux, 
# les nombres négatifs et les nombres positifs, 
# les calcules exemple : 10**3, 10/3, (1/4)*5,
# les unités de mesure exemple : cm, m, km, mm, ...

from math import pi

def airedisque2(R, unite):
   return str(pi * R * R) + " " + unite + "²"

while True:
   try:
      R = input("Entrez un nombre: ")
      R = float(R)
      break
   except ValueError:
      try:
         R = eval(R)
         break
      except:
         print("Oops!  Ce n'était pas un nombre valide.  Essayez encore...")
unite = input("Entrez l'unité de mesure: ")
print(airedisque2(R, unite))

# Amélioration du script avec une interface graphique

from math import pi
from tkinter import *

def airedisque2():
   R = entree.get()
   try:
      R = float(R)
   except ValueError:
      try:
         R = eval(R)
      except:
         R = "Oops!  Ce n'était pas un nombre valide.  Essayez encore..."
   unite = entree2.get()
   sortie.configure(text = str(pi * R * R) + " " + unite + "²")

fenetre = Tk()
fenetre.title("Calculatrice d'aire de disque")
fenetre.geometry("300x150")

label = Label(fenetre, text="Saisir le rayon du disque :")
label.pack()
entree = Entry(fenetre, width=30)
entree.pack()

label2 = Label(fenetre, text="Saisir l'unité de mesure :")
label2.pack()
entree2 = Entry(fenetre, width=30)
entree2.pack()

bouton = Button(fenetre, text="Calculer", command=airedisque2)
bouton.pack()

sortie = Label(fenetre, text="")
sortie.pack()

fenetre.mainloop()