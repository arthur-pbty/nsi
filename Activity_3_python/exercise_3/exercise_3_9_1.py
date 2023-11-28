nbr = int(input("Nombre ? "))
pre = True

for i in range(2,11):
    if i != nbr:
        if nbr % i == 0:
            pre = False

if pre:
    print("nombre premier !")
else:
    print("nombre non premier !")