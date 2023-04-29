### Cara menjalankan : 
- Clone repo, ketik : 
`git clone git@github.com:riparuk/mydreamthings.git`
- Setelah repo di clone, install composer dependencies. ketik : 
`composer install`
- Buat file .env caranya : Salin file .env.example dan ubah nama filenya menjadi .env, Atur konfigurasi database, seperti nama database, username, password, dan host.
- Jalankan perintah `php artisan key:generate` untuk membuat APP_KEY baru
- Jika ingin melakukan migrate untuk membuat tabel-tabel pada database yang telah diatur pada file .env, ketik `php artisan migrate`
- Jalankan perintah `php artisan serve` untuk menjalankan server lokal
