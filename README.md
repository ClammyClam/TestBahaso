## Cara menjalankan

1. Setelah mendownload / clone repository, pindah ke folder TestApp melalui terminal lalu install composer dengan command 

```
composer install
```

2. Ubah pengaturan database di `.env` lalu lakukan command untuk generate APP_KEY yang baru

```
php artisan key:generate
```

3. Migrasi tabelnya ke database dengan melakukan command berikut untuk membuat tabel dan mengisi data kepada tabel.
Sebelum migrate bisa buka 

```
php artisan migrate
php artisan db:seed
```

atau

```
php artisan migrate:fresh --seed
```
untuk membangun ulang seluruh database.

Sebelum melakukan migrate, bisa juga mengubah jumlah data yang akan diseed pada `database/seeds/ArticleSeeder.php`
```
public function run()
{
  factory(App\Article::class, 50)->create();
}
```
4. Kemudian ketik command 
```
php artisan serve
```
dan buka linknya untuk membuka websitenya
