msg = input("Message à coder ? ")
res = ""
alph = 'abcdefghijklmnopqrstuvwxyz'

for i in msg:
    if i == ' ' or i =="'":
        res += i
        
    else:
        p = alph.find(i)
        t = p - 3
        if t < 0:
            t = 26 + t
        res += alph[t]

print(res)