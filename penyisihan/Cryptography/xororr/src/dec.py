from pwn import *

def apalah():
    with open('pesan', 'r') as f:
        encrypt = f.read()
    with open('key', 'r') as f:
        key = f.read()
    print(xor(encrypt, key))
if __name__ == "__main__":
    apalah()
