Setup proyek:

1. **Clone repository**
   ```
   git clone https://github.com/Raka023/laravel-simple-crud-and-auth.git
   cd laravel-simple-crud-and-auth
   ```

2. **Install dependency PHP**
   ```
   composer install
   ```

3. **Copy file environment & generate key**
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup database**
   - Pastikan database sudah tersedia dan konfigurasi `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di file `.env` sudah benar.

5. **Jalankan migrasi**
   ```
   php artisan migrate
   ```

7. **Jalankan server lokal**
   ```
   composer run dev
   ```

8. **Akses aplikasi**
   - Buka browser dan akses `http://localhost:8000`

