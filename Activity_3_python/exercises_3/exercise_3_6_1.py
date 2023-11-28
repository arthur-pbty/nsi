msg = input("Message à coder ? ")
res = ""
alph = 'abcdefghijklmnopqrstuvwxyz'

for i in msg:
    if i == ' ' or i =="'":
        res += i
        
    else:
        p = alph.find(i)
        t = p + 3
        if t > 25:
            t = t - 26
        res += alph[t]

print(res)