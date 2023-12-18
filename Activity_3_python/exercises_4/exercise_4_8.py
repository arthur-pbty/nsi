def f(x):
    return 27*x**3 -27*x**2-18*x +8 

def dicotomi(x:int, t:list) -> int:
    r = -1
    g = 0
    d = len(t) - 1
    while r == -1 and g <= d:
        m = (g + d)//2
        if t[m] == x:
            r = m
        elif x > t[m]:
            g = m + 1
        else:
            d = m - 1
    return r


print("Recherche d'un zéro dans l'intervalle [a,b]")
a = int(input("a? "))
b = int(input("b? ")) + 1
p = eval(input("Précision ? "))

u = []
for i in range(a, b, p):
    u.append(i)
print(u)
print(dicotomi(f(0),u))


m = (a - b)/2


    
