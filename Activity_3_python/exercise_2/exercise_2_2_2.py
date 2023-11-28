es = int(input("Entrer un nombre entier (0 à 255) : "))

if es >= 127:
    rbn = es - 256
else:
    rbn = es

print("Cela représente l'entier signé : ", rbn)