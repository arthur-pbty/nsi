nss = input("Entrer votre numéro de sécurité sociale (13 chiffres) : ")
cdc = input("Entrer votre clé de contrôle (2 chiffres) : ")

if int(cdc) == 97 - int(nss) % 97:
    print("Votre numéro de sécurité sociale est valide.")
else:
    print("Votre numéro de sécurité sociale est INVALIDE !")