# Çalıştırma

=> Xampp kurulmalıdır. (https://www.apachefriends.org/tr/download.html)

=> Composer kurulmalıdır. (https://getcomposer.org/download/)

=> Ödev Klasörü (cifcimustafaodev) C:\xampp\htdocs\ altına kopyalanmalıdır.

=> Komut istemi ekranında;
	
	C:\xampp\htdocs\cifcimustafaodev

	composer install 

	(Bu aşamada hata alınır ise -php_intl bulunamadı hatası almıştım-, klasör içerisindeki php.ini dosyası C:\xampp\php\ yoluna kopyalanmalıdır ve komut tekrar başlatılmalıdır.)

=> Xampp kontrol panelinden apache başlatılmalıdır.

=> Komut istemi ekranında, ilgili klasör altında iken;
	
	php -S localhost:8080 -t public/ public/index.php   komutu ile çalışma başlatılabilir.

# Özellikler

=> Google Translate rest api

=> Zend Framework 2 kullanılmıştır

=> Php 7 kullanılmıştır.

=> Kaynak metinde ve çeviri metinde yer alan aynı kelimeler kalın hale getirilmiştir.