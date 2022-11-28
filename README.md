[![MIT License][license-shield]][license-url]

<!-- LOGO IUD -->
<br />
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="https://carrerasuniversitarias.com.co/logos/original/logo-institucion-universitaria-digital-de-antioquia-iu.webp" alt="Logo" width="80" height="80">
      <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250" alt="Laravel Logo">
  </a>

  
</div>

# App post y categorias construida con: ![Laravel.dev] ![PHP.dev] ![Bootstrap]

## Demo

![GIF DEMO](https://user-images.githubusercontent.com/85720891/204366512-940cbbfa-60e9-40c1-a708-36ed0da2e7ef.gif)

## Tablas
<div align="" margin=5px>

![image](https://user-images.githubusercontent.com/85720891/204367488-2c3c4c0c-c101-401f-a516-f6e7d5b9b3f6.png)
![image](https://user-images.githubusercontent.com/85720891/204368379-eb94d469-fa59-4482-b337-edce839f5672.png)
    
</div>

### Instalación

1. Clonar el repositorio
   ```sh
   git clone https://github.com/eddysantiagoo/MicroProyectos-Diplomado-IUD/tree/laravel
   ```
2. Instalar las dependencias del composer
   ```sh
   $ composer install
   ```
3. Crear y configurar archivo `.env`
   ```js
   //Comando para crear una plantilla de un archivo .env
   $ cp .env.example .env
   
   //Configuración de tu DB
   $DB_CONNECTION=mysql
   $DB_HOST=127.0.0.1
   $DB_PORT=3306
   $DB_DATABASE=posts
   $DB_USERNAME= your_username
   $DB_PASSWORD= your_password
   ```
 3. Despues de tener tu base de datos configurada en el `.env` ejecuta las migraciones
   ```sh
   $ php artisan migrate 
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LINKS ICONOS -->

[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[HTML.dev]: https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[JS.dev]: https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor
[CSS.dev]: 	https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white
[Laravel.dev]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[PHP.dev]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[Bootstrap]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
