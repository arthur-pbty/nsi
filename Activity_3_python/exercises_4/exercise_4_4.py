# A l'aide de la fonction randint() du module random, écrire une fonction qui retourne un mot de passe de longueur N (chiffres, lettres minuscules ou majuscules).
# On donne :
# chaine = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'
# >>> print(password(10))
# mHVeC5rs8P
# >>> print(password(6))
# PYthoN

chaine = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'

from random import randint, choice

def password(n:int) -> str:
    r = ''
    for i in range(n):
        r += chaine[randint(0, len(chaine))]
    return r

print(password(10))

def password2(n:int) -> str:
    r = ''
    for i in range(n):
        r += choice(chaine)
    return r

print(password2(10))

# Avec une interface graphique :

from tkinter import *
from random import randint, choice

def password(n:int) -> str:
    r = ''
    for i in range(n):
        r += choice(chaine)
    return r

def update_label(*args):
    label.config(text=f"Votre mot de passe : {password(n.get())}")

fen = Tk()
fen.title("Mot de passe")
fen.geometry("400x200")

n = IntVar()
n.set(8)

Label(fen, text="Longueur du mot de passe :").pack()
Entry(fen, textvariable=n).pack()

label = Label(fen, text=f"Votre mot de passe : {password(n.get())}")
label.pack()

Button(fen, text="Générer", command=update_label).pack()

fen.mainloop()