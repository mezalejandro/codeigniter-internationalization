codeigniter-internationalization
================================

Simple Multiple languages for Codeigniter


************
application/config/autoload.php
************
EN: Care first call the library session, but will not work
ES: Cuidado llamar primero a la libreria session, sino no funcionará
$autoload['libraries'] = array('session','set_language');