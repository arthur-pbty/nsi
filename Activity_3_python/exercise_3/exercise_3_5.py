import random

nombre = random.randint(1,100)
coup = 0
a = None
print("Le jeu consiste à deviner un nombre entre 1 et 100 :")

while a != nombre:
    coup += 1
    a = int(input("--> "))
    if a < nombre:
        print("trop petit !")
    elif a > nombre:
        print("trop grand !")
    else:
        print(f"Gagné en {coup} coups !")