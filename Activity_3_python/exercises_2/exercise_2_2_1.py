es = int(input("Entrer un entier signé en complément à deux (-128 à +127) : "))

if es>=0:
    rbn = es
else:
    rbn = 256 + es

print("La représentation en binaire naturel est : ", rbn)