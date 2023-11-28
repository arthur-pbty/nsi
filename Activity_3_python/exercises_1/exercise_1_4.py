# From the two variables prenom and nom, display the initials (e.g. LM for Léa Martin).

first_name = input("What's your first name? ").capitalize()
last_name = input("What's your last name? ").capitalize()

print(first_name, last_name, "has pure initials", first_name[0], last_name[0])