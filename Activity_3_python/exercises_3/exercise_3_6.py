# Code de César
# En cryptographie, le code de César est une technique de chiffrement élémentaire qui consiste à décaler une lettre de 3 rangs vers la droite :
# Ecrire le script de ce codage.

# Ces scripts prennent en charge les majuscules et les minuscules.

from tkinter import *

def code(msg:str) -> str:
    """Fonction qui code un message selon le code de César"""
    res = ""
    alph = 'abcdefghijklmnopqrstuvwxyz'

    for i in msg:
        if i == ' ' or i =="'":
            res += i
        
        else:
            p = alph.find(i.lower())
            t = p + 3
            if t > 25:
                t = t - 26
            if i.isupper():
                res += alph[t].upper()
            else:
                res += alph[t]

    return res

def decode(msg:str) -> str:
    """Fonction qui décode un message selon le code de César"""
    res = ""
    alph = 'abcdefghijklmnopqrstuvwxyz'

    for i in msg:
        if i == ' ' or i =="'":
            res += i
        
        else:
            p = alph.find(i.lower())
            t = p - 3
            if t < 0:
                t = t + 26
            if i.isupper():
                res += alph[t].upper()
            else:
                res += alph[t]

    return res

def update_labels(*args):
    code_label.config(text=f"Votre message coder : {code(msg.get())}")
    decode_label.config(text=f"Votre message decoder : {decode(msg.get())}")

fen = Tk()
fen.title("Code de César")
fen.geometry("400x400")

msg = StringVar()
msg.set("")


Label(fen, text="Votre message :").pack()
Entry(fen, textvariable=msg).pack()

code_label = Label(fen, text="")
code_label.pack()
btn = Button(fen, text="Copier le message coder", command=lambda:fen.clipboard_append(code(msg.get()))).pack()

decode_label = Label(fen, text="")
decode_label.pack()
btn = Button(fen, text="Copier le message decoder", command=lambda:fen.clipboard_append(decode(msg.get()))).pack()


update_labels()
msg.trace_add("write", lambda *args: update_labels())

fen.mainloop()