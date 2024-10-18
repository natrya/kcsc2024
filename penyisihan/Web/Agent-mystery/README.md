# Agent Mystery Challenge

## Deskripsi

Halo, Sobat Hacker! 🎉

Kamu ditantang untuk memecahkan misteri Agent Intel yang super rahasia. Agent ini punya sesuatu yang kamu pasti pengen banget, alias FLAG-nya! Tapi, untuk dapetin FLAG itu, kamu harus pinter-pinter manipulasi `User-Agent` di request-mu. Siap untuk uji skillmu? Yuk, buktikan kalau kamu adalah hacker sejati!

## Tingkat Kesulitan

**Easy**

## Author
- roxasz

## Petunjuk (Kalau belum ada yang solve sama sekali selama berjam-jam.)

1. **Pahami Bedanya Input Form sama Header HTTP**:
   - Form yang disediain cuma buat input `User-Agent` aja, tapi inputan itu nggak bakal ngubah header HTTP `User-Agent` yang sebenernya dikirim sama browser.
   
2. **Manfaatkan Tools kayak `cURL`**:
   - Gunakan `cURL` buat ngatur header HTTP `User-Agent` jadi nilai yang diinginkan (`kcsc2024`).
   
3. **Cek Header HTTP**:
   - Pahami gimana data diproses sama server dengan ngecek header HTTP yang dikirim.

## Tags

- **Web Exploitation**

## Deployment

### Persyaratan

- **Docker Engine** versi terbaru
- **Docker Compose** versi terbaru

### Langkah-langkah

1. **Install Docker Engine Versi Terbaru**

   Pastikan Docker Engine sudah terinstall dan up-to-date di mesin kamu. Kamu bisa download dan install Docker dari [situs resmi Docker](https://www.docker.com/get-started).

2. **Jalankan Container**

   Buka terminal dan navigasi ke direktori project, lalu jalankan perintah berikut:

   ```bash
   docker-compose up --build --detach