<?php

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
echo __DIR__ . "<br>";

if (file_exists(__DIR__)) {
    echo "1.Yes" . "<br>";
}

if (is_file(__FILE__)) {
    echo "2.Yes" . "<br>";
} else {
    echo "2.No" . "<br>";
}

if (is_file(__DIR__)) {
    echo "3.Yes" . "<br>";
} else {
    echo "3.No" . "<br>";
}

if (is_dir(__DIR__)) {
    echo "4.Yes" . "<br>";
} else {
    echo "4.No" . "<br>";
}

if (is_dir(__FILE__)) {
    echo "5.Yes" . "<br>";
} else {
    echo "5.No" . "<br>";
}

echo phpinfo();
