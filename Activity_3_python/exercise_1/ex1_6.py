identifiants = {
    "ale.lecouturier":"Huz4",
    "lea.martin":"monty"
    }

identifiant = input("Identifiant : ")
motdepasse = input("Mot de passe : ")

if identifiant in identifiants and motdepasse == identifiants[identifiant]:
    print(True)
else:
    print(False)