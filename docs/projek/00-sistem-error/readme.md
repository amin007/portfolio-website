# sistem error
Ini adalah contoh antaramuka jika sistem ada masalah teknikal.

___
### konsep asas dalam php/html template
Ia terdiri dari beberapa folder dan fail.

folder              | fail
------------------- | :----------:
01-page404          | [**Index Php**](./01-page404/index.php)
01-page404          | [**Awek01**](./01-page404/awek01.html)
01-page404          | [**Awek02**](./01-page404/awek02.html)
01-page404          | [**Awek03**](./01-page404/awek03.html)
01-page404          | [**Awek04**](./01-page404/awek04.html)
01-page404          | [**Awek05**](./01-page404/awek05.html)
01-page404          | [**Awek06**](./01-page404/awek06.html)
01-page404          | [**Awek07**](./01-page404/awek07.html)
01-page404          | [**Awek08**](./01-page404/awek08.html)
01-page404          | [**Britney**](./01-page404/britney-spear01.html)
02-iklan-kecantikan | [**Iklan**](./02-iklan-kecantikan)
03-dns changer | [**Dns Changer**](./03-dnschanger)

___
# Php Version

```php
//phpinfo();
//echo PHPVERSION() . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
echo '<pre>'; print_r($_SERVER); echo '</pre>';
```

```php
	function pautan($name,$web)
	{
		$icon1 = '<i class="fas fa-globe-asia fa-spin"></i>';
		$icon2 = '<i class="far fa-folder fa-spin"></i>';
		$icon = ($name != $web) ? $icon1 : $icon2;
		$link = ($web == null) ? $name : '<a target="_blank" href="' . $web
		. '">' . $name . '</a>';
		return '&nbsp;&nbsp;' . $icon . $link . '<hr>';
	}
```

___
# Standard
* http://www.php-fig.org/psr/psr-4/

# Sumber ilham dari
* http://jream.com/lab
* https://www.php-fig.org
* https://github.com/amin007/mvc-melayu

___
# Sumber ilham kawan-kawan
* Stylesheet
  * [Bootstrap](http://getbootstrap.com)
  * [Bootstrap.Themes](http://bootstrap.themes.guide)
  * [AdminLTE](https://adminlte.io/themes/AdminLTE)
  * [animate.css](https://daneden.github.io/animate.css)
  * [Sweet Alert](http://t4t5.github.io/sweetalert)
  * [FontAwesome](http://fortawesome.github.io/Font-Awesome)
  * [Enjoy Css](https://enjoycss.com)
* Javascript
  * [jQuery](http://jquery.com)
  * [jQuery.Form](http://malsup.com/jquery/form)
  * [backstretch](http://srobbin.com/jquery-plugins/backstretch)
* Gambar Percuma
  * [7-themes](http://7-themes.com)
  * [Pexels](https://pexels.com)
  * [Pixabay](https://pixabay.com)
  * [Unslpash](https://unsplash.com)
* Lain-lain
  * [markdown-cheatsheet](https://guides.github.com/pdfs/markdown-cheatsheet-online.pdf)