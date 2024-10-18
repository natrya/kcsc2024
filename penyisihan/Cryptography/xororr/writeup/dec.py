from pwn import *
def main():
    with open('pesan', 'r') as f:
        encrypt = f.read()
            
    with open('key', 'r') as f:
        key = f.read()
    print(xor(encrypt, key))