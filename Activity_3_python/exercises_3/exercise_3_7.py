u = int(input("Valeur initiale ?"))
jusque = int(input("Jusqu'à quel rang ?"))

print(0, u)
for i in range(1,jusque+1):
    u = u/2 + 1/u
    print(i, u)