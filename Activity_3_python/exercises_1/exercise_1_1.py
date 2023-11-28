# Display the size in bytes and bits of a 536 kio file.
# 1 kio (1 kibioctet) = 210 bytes
# 1 byte = 1 byte = 8 bits

bool = True
while bool:
   try:
      fichier = int(input("What is the size of your file in kio? "))
      print("Fichier :", fichier, "kio", "=", fichier * 2**10, "octets", "=", fichier * 8 * 2**10, "bits")
      bool = False
   except:
      print("You had to enter a number. Example: 536")