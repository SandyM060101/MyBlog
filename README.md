<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Project
Proyek ini dikembangkan sebagai bagian dari penilaian akhir (UAS) untuk menunjukkan implementasi Laravel dalam membangun aplikasi web yang kuat dan efisien. Ini menampilkan praktik terbaik dalam pengembangan web modern, termasuk manajemen database dengan SQLite, penanganan migrasi, dan sistem backend terstruktur. Proyek ini berfungsi sebagai sumber pembelajaran berharga bagi pelajar dan pengembang yang menjelajahi Laravel.

Anggota Kelompok

<table>
  <tr>
    <td>
      <img src="https://github.com/SandyM060101/uas-semester7/blob/main/public/img/25.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/uas-semester7/blob/main/public/img/27.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/uas-semester7/blob/main/public/img/26.png?raw=true" width="200"/>
    </td>
  </tr>
</table>

- 2169700001 : Salsa Dwiyanti
- 2169700003 : Sandy Meliyawan
- 2169700006 : Listiani Lesveva Setiawan

Teknologi Yang Digunakan

- Laravel Versi 11.41.1
- Filament Versi 3.2
- Tailwind Sebagai Framework CSS
- PHP 8.2 / 8.3
- Database Mysql
- Composer
- Git & GitHub
- Artisan CLI

### Run composer install

```
composer install
```

### Create your `.env`

```
cp .env.example .env
```

Now create a new database and enter the credentials inside your environment file.

### Set your app key

```
php artisan key:generate
```

### Upgrade Filament

```
php artisan filament:upgrade
```

### Run migrations

```
php artisan migrate:fresh --seed
```

### Link storage

```
php artisan storage:link
```
### 8. Login
```bash
http://127.0.0.1:8000/admin

email : admin@gmail.com
password : admin123

```
### 9. All Command
```
composer install && 
cp .env.example .env &&
php artisan key:generate && 
php artisan filament:upgrade &&
php artisan migrate:fresh &&
php artisan storage:link
```

Tampilan Website

<table>
  <tr>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanUtama.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanLogin.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanDashboard.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanCategory.png?raw=true" width="200"/>
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanPage.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanPost.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanComment.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/HalamanAbout.png?raw=true" width="200"/>
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/InputCategory.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/InputPage.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/InputPost.png?raw=true" width="200"/>
    </td>
    <td>
      <img src="https://github.com/SandyM060101/MyBlog/blob/main/public/image/InputComment.png?raw=true" width="200"/>
    </td>
  </tr>
</table>

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
