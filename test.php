<?php

$test = "data:text/html;base64,PHNjcmlwdD5hbGVydCgiWFNTIik7PC9zY3JpcHQ+Cg==";




header("location:$test");

$input = " w'h'o'am'i ";

$x = escapeshellcmd($input);

 system($x);





?>