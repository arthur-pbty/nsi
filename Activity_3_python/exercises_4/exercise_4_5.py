# Ecrire une fonction qui retourne une carte (au hasard) d'un jeu de Poker à 52 cartes.
# On utilisera la fonction choice() ou randint() du module random.
# On donne :
# ListeCarte = ['2s','2h','2d','2c','3s','3h','3d','3c','4s','4h','4d','4c','5s','5h','5d','5c', '6s','6h','6d','6c','7s','7h','7d','7c','8s','8h','8d','8c','9s','9h','9d','9c', 'Ts','Th','Td','Tc','Js','Jh','Jd','Jc','Qs','Qh','Qd','Qc','Ks','Kh','Kd','Kc','As','Ah','Ad','Ac']

from random import choice

ListeCarte = ['2s','2h','2d','2c','3s','3h','3d','3c','4s','4h','4d','4c','5s','5h','5d','5c', '6s','6h','6d','6c','7s','7h','7d','7c','8s','8h','8d','8c','9s','9h','9d','9c', 'Ts','Th','Td','Tc','Js','Jh','Jd','Jc','Qs','Qh','Qd','Qc','Ks','Kh','Kd','Kc','As','Ah','Ad','Ac']

def tiragecarte():
    return choice(ListeCarte)

print(tiragecarte())

# Avec une interface graphique (Tkinter et une API) :

import requests
from tkinter import *
from PIL import Image, ImageTk

def tiragecarte():
    response = requests.get("https://deckofcardsapi.com/api/deck/new/draw/?count=1")
    if response.status_code == 200:
        data = response.json()
        return data['cards'][0]['image']
    return None

def affichecarte():
    image_url = tiragecarte()
    if image_url:
        print(image_url)
        img = Image.open(requests.get(image_url, stream=True).raw)
        img = img.resize((100, 150), Image.ANTIALIAS)
        photo = ImageTk.PhotoImage(img)
        canvas.image = photo 
        canvas.create_image(50, 75, image=photo)
    else:
        print("Erreur lors du tirage de la carte")

fenetre = Tk()
canvas = Canvas(fenetre, width=100, height=150, bg="ivory")
canvas.pack()
bouton = Button(fenetre, text="Tirer une carte", command=affichecarte)
bouton.pack()
fenetre.mainloop()
