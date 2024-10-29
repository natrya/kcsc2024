<?php

echo "Bisakah anda masuk sebagai <b>orang-kediri</b>?";

if(empty($_COOKIE["login"])){
    exit("Anda harus login terlebih dahulu! pehh!!");
}else{

    $cookie = $_COOKIE["login"];
 
    list($name, $exp, $hmac) = explode('^', $cookie);
    $expired = $exp += 1000;
    
    if($expired < time()){
        exit("Expired!");
    }
    
    $kunci = hash('sha256', $name . $exp);
   
    $hash = hash_hmac('md5', $name . $exp, $kunci);

    if ($hmac !== $hash){
        exit("hash salah!");
    }

    if($name === "orang-kediri"){
        echo "Welcome orang-kediri\n";
        echo PHP_EOL.file_get_contents("/home/flag.txt");
    }else{
        echo "Maaf, anda adalah <b>$name</b>, anda bukan <b>orang-kediri</b>\n";
        echo "pehh!!!";
    }

}

?>


