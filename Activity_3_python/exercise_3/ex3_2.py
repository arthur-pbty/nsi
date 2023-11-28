a = int(input("Nombre de notes ? "))
note = 0
for i in range(a):
    note += float(input("-->"))
print(f"Moyenne : {note/a}")