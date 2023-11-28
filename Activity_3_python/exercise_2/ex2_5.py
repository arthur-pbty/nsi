from math import*

print("Résolution de l'équation du second degré : ax² + bx + c = 0")
a = float(input("Coefficient a ?"))
b = float(input("Coefficient b ?"))
c = float(input("Coefficient c ?"))

discriminant = (b**2)/(4*a*c)

print("Discriminant : ",discriminant)

if discriminant > 0:
    print("Deux solutions :")
    print((-b-sqrt(discriminant))/(2*a))
    print((-b+sqrt(discriminant))/(2*a))
elif discriminant == 0:
    print("Une solution :")
    print(-b/(2*a))
else:
    print("Pas de solution !")