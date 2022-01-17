<!-- LFI vulernbility !-->


<?php

// local fle inclusion stuck on here

$x  = $_GET["page"];


$pattern = "/sam/i";

$lfi = preg_match($pattern,$x);


// $lfi = str_replace("","_",$x);

if($lfi == 1)
{
       http_response_code(403);
        die("You're Blocked :(");
    }
    else
    {
   $x1 = fopen($x,"r");
   echo fread($x1,100000);
}



?>

<!-- csrf vulernbility !-->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

// $x = hash("sha256",rand()*100);


// setcookie("csrf",$x, time() + (86400 * 30),"/");

?>

    <form action="<?php ?>" method="get">
    <input type="hidden" name="csrf" value="<?php  ?>">
    Enter You're Name: <input type="text" name="name" id="name">
    <button>Submit</button>
    
    </form>
</body>
</html>

<?php

// echo $x;

?> -->