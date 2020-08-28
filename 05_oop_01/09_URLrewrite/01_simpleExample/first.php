<?php

$amount = 9234.99;


// in case of Fatal error: Uncaught Error: Class 'NumberFormatter' not found
//you must enable intl packaget in PHP
// linux:  apt-get install php-intl
// win: http://php.net/manual/en/install.pecl.windows.php, https://stackoverflow.com/questions/33869521/how-can-i-enable-php-extension-intl
// mac: find it by yourself :)
if (extension_loaded("intl")) {
    $f = new NumberFormatter("hr-HR", NumberFormatter::DECIMAL);

    echo $f->format($amount);
} else {
    echo "Extension intl is not install";
}
