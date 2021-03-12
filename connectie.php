<?php

if ($link = mysqli_connect("localhost", "bbm", "toor", "tim")) {
    echo "Verbinding geslaagd\n";
} else {
    echo "Verbinding mislukt:\n";
    echo mysqli_connect_error();
}