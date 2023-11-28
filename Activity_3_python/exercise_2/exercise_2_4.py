taille = float(input("Votre taille en cm ? "))
masse = float(input("Votre masse en kg ? "))

IMC = (masse/taille**2)*10000

print("IMC = " ,round(IMC) ,"kg/m²")

if IMC < 16:
    print("Anorexie ou dénutrition")
elif IMC < 18.5:
    print("Maigreur")
elif IMC < 25:
    print("Corpulence normale")
elif IMC < 30:
    print("Surpoids")
elif IMC < 35:
    print("Obésité modérée (Classe 1)")
elif IMC < 40:
    print("Obésité élevé (Classe 2)")
else:
    print("Obésité morbide ou massive")