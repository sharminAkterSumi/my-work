<?php

    $a="sumi, moni ,shanta";
    echo"<h2>string Functions  : </h2><h3> repeat,replace,empty,htmlentities,html_entity_decode,isset,str_split</h3>";
    echo"<br>";
    $hope="Allah is my only hope .";
    print_r(str_repeat($hope,3)); echo"<br>";
    print_r(str_replace("umi","harmin",$a)); echo"<br>";
    

    $name="sharmin akter .sumi";
     print_r(explode(".",$name)) ;echo"<br>";

     $string="<p>Allah is my only hope </p>";
     echo(htmlentities($string));echo"<br>";
     echo(html_entity_decode($string));echo"<br>";

     $e="sumi";
     var_dump(empty($e));echo"<br>";

    if(empty($e)){
        echo"Enter your name";
    }
    else{
        echo"Thank you for your information";
    }echo"<br>";

     var_dump(isset($e));echo"<br>";
    $is=null;
    if(isset($is)){
        echo"Thank you for your information";
    }
    else{
        echo"Enter your name";
    }
    echo"<br>";

     echo(chop($name,"sumi"));echo"<br>";
     print_r(str_split($name,4));echo"<br>";
    
    echo"<h2>Array Functions :</h2><h3> array chunk,array keys,array values,
    array count values,array_column,count,array push,array pop,array shift,array unshift,
    array_combine ,array_diff, array_diff_key, array_diff_assoc ,array_intersect,array_intersect_key,
    array_merge,array_key_first,in array,join,count,implode,array_reverse,end</h3>";
    $Districts=[
        "c"=>"chittagong",
        "d"=>"Dhaka",
       "r"=> "Rajshahi",
       "s"=> "Sylhet",
       "b"=> "Barisal",
       "k"=> "Khulna"
    ];
    echo"<pre>";
    print_r(array_chunk($Districts,3));
    echo"</pre>";

    print_r(array_keys($Districts));echo"<br>";
    print_r(array_values($Districts));echo"<br>";
    $c=["sumi","moni","sumi","fatema"];
    print_r(array_count_values($c));echo"<br>";
    $b=[
            ["name"=>"sumi",
            "roll"=>"01",
            ],
            ["name"=>"shanta",
            "roll"=>"02",
            ]

    ];
    print_r (array_column($b,"name"));echo"<br>";
    print_r(count($b));echo"<br>";

    

    $array1=[
            "a"=>"apple",
            "b"=>"banana",
            "c"=>"cat",
            "d"=>"dog",
    ];
    $array2=[
        "c"=>"foods",
        "b"=>"banana",
        "i"=>"icecreem",
        "a"=>"butterfly",
        
    ];
 print_r(array_combine($array1,$array2));echo"<br>";
  
   
array_push($array1,"moni");
echo"<pre>";
print_r($array1);
echo"</pre>";

array_pop($array1);
echo"<pre>";
print_r($array1);
echo"</pre>";

array_shift($array1);
echo"<pre>";
print_r($array1);
echo"</pre>";

$a=['sumi','shanta','fatema','kumsuma','nur'];

array_unshift($a,"moni");
echo"<pre>";
print_r($a);
echo"</pre>";


        print_r(array_reverse($array1));echo"<br>";
        print_r(array_reverse($a)[2]);echo"<br>";   
        print_r(array_diff($array1,$array2));echo"<br>";
        print_r(array_diff_key($array1,$array2));echo"<br>";
        print_r(array_diff_assoc($array1,$array2));echo"<br>";
        print_r(array_intersect($array1,$array2));echo"<br>";
        print_r(array_intersect_key($array1,$array2));echo"<br>";
        print_r(array_merge($array1,$array2));echo"<br>";
        print_r(array_reverse($array2));echo"<br>";

    $a=['sumi','shanta','fatema','kumsuma','nur'];

     var_dump(in_array("shanta",$a));echo"<br>";
     print_r(in_array("nur",$a));echo"<br>";

        if(in_array("sumi",$a)){
            echo"true";
        }
        else{
            echo"False";
        }
        echo"<br>";

     print_r(count($a));echo"<br>";
     if(count($a)<7){
         echo" condition is true";
     }
     else{
         echo"condition is  false";
     }
     echo"<br>";
     echo(implode("...",$a));echo"<br>";
     print_r(join(" ",$a));echo"<br>";  

     print_r(end($a));echo"<br>";

     if(end($a)=='nur'){
         echo"this is true";
     }
     else{
         echo"this is false";
     }
     


     
    

     

?>