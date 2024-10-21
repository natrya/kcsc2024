encrypted_flag = "OGWG nywxcw5qtp7cwlmjx555rkkk\""
shift = 4

decrypted_flag = ''.join(chr((ord(c) - 32 - shift) % 95 + 32) for c in encrypted_flag)
print(decrypted_flag)
