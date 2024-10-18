## How To

Untuk dapetin FLAG, kamu harus ngirim POST request ke endpoint `/submit` dengan header `User-Agent` yang di-set ke `kcsc2024`. Bisa pake `cURL` kayak contoh di bawah ini:

### Contoh Menggunakan `cURL`

```bash
curl -X POST http://localhost:5000/submit -A "kcsc2024"