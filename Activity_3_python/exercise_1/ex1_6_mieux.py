identifiants = {
    "ale.lecouturier":"Huz4",
    "lea.martin":"monty"
    }

#identifiant = input("Identifiant : ")
#motdepasse = input("Mot de passe : ")

def f():
    if identifiant.get() in identifiants and motdepasse.get() == identifiants[identifiant]:
        print(True)
    else:
        print(False)


from tkinter import * 

fenetre = Tk()

label = Label(fenetre, text="Identifiant :")
label.pack()


identifiant = Entry(fenetre, width=30)
identifiant.pack()



label = Label(fenetre, text="Mot de passe :")
label.pack()


motdepasse = Entry(fenetre, width=30)
motdepasse.pack()

bouton = Button(fenetre, text="Se connecter", command=f)
bouton.pack()

fenetre.mainloop()