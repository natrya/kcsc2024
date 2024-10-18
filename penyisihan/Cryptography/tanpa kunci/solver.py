def encrypt(message):
    encrypted_message = ""
    for char in message:
        a = (ord(char) * 2) + 10
        b = (a ^ 42) + 5
        c = (b * 3) - 7
        encrypted_char = c ^ 23
        encrypted_message += chr(encrypted_char)
    return encrypted_message

from string import printable

key = {}
for c in printable:
    key[encrypt(c)] = c

chiphrt = open('flag.txt.enc', 'rb').read().decode()
flag=""
for c in chiphrt:
    flag += key[c]

print(flag) 
