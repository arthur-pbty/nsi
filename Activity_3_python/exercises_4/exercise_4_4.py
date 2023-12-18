chaine = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'

from random import randint, choice

def password(n:int) -> str:
    r = ''
    for i in range(n):
        r += chaine[randint(0, len(chaine))]
    return r

print(password(10))

def password2(n:int) -> str:
    r = ''
    for i in range(n):
        r += choice(chaine)
    return r

print(password2(10))