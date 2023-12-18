# Ecrire une fonction qui retourne une liste de N cartes différentes d'un jeu de Poker à 52 cartes.
# Noter qu'une fonction peut appeler une fonction : on peut donc réutiliser la fonction tiragecarte() de l'exercice précédent.
# Exemple :
# >>> print(tirage_n_carte(2))
# ['As', 'Ah']
# >>> print(tirage_n_carte(25))
# ['Jc', 'Jh', 'Tc', '2d', '3h', 'Qc', '8d', '7c', 'As', 'Td', '8h', '9c', 'Ad', 'Qh',
# 'Kc', '6s', '5h', 'Qd', 'Kh', '9h', '5d', 'Js', 'Ks', '5c', 'Th']

from random import choice

ListeCarte = ['2s','2h','2d','2c','3s','3h','3d','3c','4s','4h','4d','4c','5s','5h','5d','5c', '6s','6h','6d','6c','7s','7h','7d','7c','8s','8h','8d','8c','9s','9h','9d','9c', 'Ts','Th','Td','Tc','Js','Jh','Jd','Jc','Qs','Qh','Qd','Qc','Ks','Kh','Kd','Kc','As','Ah','Ad','Ac']

def tiragecarte(n:int):
    u = []
    for i in range(n):
        u.append(choice(ListeCarte))
    return u


print(tiragecarte(4))

# Avec une interface graphique (Tkinter et une API) :

import requests
from tkinter import *
from PIL import Image, ImageTk

def tiragecarte(n: int):
    u = []
    for i in range(n):
        response = requests.get("https://deckofcardsapi.com/api/deck/new/draw/?count=1")
        if response.status_code == 200:
            data = response.json()
            u.append(data['cards'][0]['image'])
    return u

def affichecarte():
    n = int(entry.get())
    image_urls = tiragecarte(n)
    images = []
    if image_urls:
        for i in range(n):
            img = Image.open(requests.get(image_urls[i], stream=True).raw)
            img = img.resize((100, 150), Image.ANTIALIAS)
            photo = ImageTk.PhotoImage(img)
            images.append(photo)
            canvas.create_image(10 + i * 110, 10, anchor='nw', image=photo)
    else:
        print("Erreur lors du tirage de la carte")

    canvas.images = images

fenetre = Tk()
canvas = Canvas(fenetre, width=1200, height=200, bg="ivory")
canvas.pack()
entry = Spinbox(fenetre, from_=1, to=9)
entry.pack()
bouton = Button(fenetre, text="Tirer une carte", command=affichecarte)
bouton.pack()
fenetre.mainloop()

