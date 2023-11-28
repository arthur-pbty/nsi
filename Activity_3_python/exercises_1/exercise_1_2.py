# The social security number is made up of 13 digits plus the control key (2 digits).
# Example: 1 89 11 26 108 268 91
# The control key is calculated using the formula :
# Key = 97 - (social security number modulo 97)
# Find the control key for your social security number.
# Why use the control key?

bool = True
while bool:
   try:
      cle = int(input("What is your control key? "))
      res = 97 - cle%97
      print("The control key for", cle, "is", res)
      bool = False
   except:
      print("You had to enter a key. Example: 1891126108268")

# The purpose of the control key is to verify the validity of the social security number.f