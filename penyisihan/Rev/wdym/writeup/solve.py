encrypted_flag = [150, 134, 166, 134, 246, 232, 144, 146, 166, 190, 
                 146, 230, 190, 160, 242, 232, 208, 96, 156, 190, 
                 146, 220, 190, 200, 146, 166, 130, 166, 250]

decrypted_flag = ''.join([chr(n >> 1) for n in encrypted_flag])

print(decrypted_flag)