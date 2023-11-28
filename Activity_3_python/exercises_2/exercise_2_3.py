note = int(input("Note au bac (sur 20) : "))

if note < 10:
    print("recalé")
elif note < 12:
    print("Pas de mention")
elif note < 14:
    print("Assez bien")
elif note < 16:
    print("Bien")
else:
    print("Félissitation")