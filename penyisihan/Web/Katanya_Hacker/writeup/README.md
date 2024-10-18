## How To

Untuk dapetin FLAG, kamu harus ngirim POST request ke endpoint `/slot.php` dengan variable putar di set ke [100,100,100] sebanyak 20x agar mendapatkan flagnya.

### Contoh Menggunakan `cURL`

```python
import requests

HOST = "http://localhost:777"

s = requests.Session()
for i in range(20):
    resp = s.post(f"{HOST}/slot.php", json={"puter": [100, 100, 100]})
    print(resp.content)
```