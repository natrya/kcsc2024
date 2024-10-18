from hashlib import md5

print("Anda sedang menjual tiket konser taylor swift")
print("Terdapat 2 pembeli yang ingin membeli tiket, Bob dan Mark. Sayangnya tiket hanya tersisa 1")
print("Tiket tersebut diverifikasi menggunakan md5")
print("Dapatkah anda membuat tiket palsu untuk Mark agar dia bisa ikut?")

bob = bytes.fromhex(input("Masukkan kode tiket untuk Bob: "))
md5bob = md5(bob).digest()
print("md5 dari tiket Bob:", md5bob.hex())

mark = bytes.fromhex(input("Masukkan kode tiket buatan untuk Mark: "))
md5mark = md5(mark).digest()
if bob == mark:
    print("Mark: Hey apa apaan ini, ini sama persis dengan tiket Bob!")
    exit()

print("md5 dari tiket Mark:", md5mark.hex())
if bob != mark and md5mark == md5bob:
    print("Mark: Terima kasih! Ini bayarannya")
    print(open("flag.txt").read())
else:
    print("Petugas: Hey apa apaan ini, ini bukan tiket asli!")