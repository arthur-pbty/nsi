a = input("Entrer la chaîne : ")
b = 0

for i in range(len(a)):
    if a[i] == "Z" or a[i] == "z":
        b += 1

print(f"Résultat : {b}")