<?php 

    // $file=fopen("../model/Data.txt","r") or die("Unable to open file");
    // echo fread($file,filesize("../model/Data.txt"));
    // fclose($file);

    // $fileW=fopen("../model/Data.txt","w") or die("Unable to open file");
    // echo fwrite($fileW,"বদলে ফেলুন আপনার জীবন,
    // দক্ষ করে গড়ে তুলুন নিজেকে ই-লার্নিং এ সাশ্রয়ী মূল্যের সব কোর্স এর মাধ্যমে।");
    // fclose($fileW);

    $fileR=fopen("../model/Data.txt","r") or die("Unable to open file");
    echo fread($fileR,filesize("../model/Data.txt"));
    fclose($fileR);
?>