<?php
// set file name
$files = fopen("data.txt", "r"); 
$file="data.txt";
// read file contents into string
$str = file_get_contents($file) or die("C");

// read file into array
$array = file($file) or die("Can not read from file");

// count lines in the file
$lines=count(file($file));
echo"<br>number of lines:".$lines;

// count characters with space
$numCharSpace = strlen($str);
echo "<br>Counted " .$numCharSpace. " character.<br>";

 
 
//counts words
$numWords = str_word_count($str);
echo "Counted " . $numWords . " word(s).<br>";

$vCount=0;
$cCount =0;
 $str1 = strtolower($str);  
    for($i = 0; $i < strlen($str1); $i++) {  
              
    //Checks whether a character is a vowel  
    if( $str1[$i] == 'a' || $str1[$i] == 'e' || $str1[$i] == 'i' || $str1[$i] == 'o' || $str1[$i] == 'u') {  
        //Increments the vowel counter  
        $vCount++;  
    }  
              
    //Checks whether a character is a consonant  
    else if($str1[$i] >= 'a' && $str1[$i] <= 'z') {  
      
        //Increments the consonant counter  
        $cCount++;  
        }  
    }  
    echo "Number of vowels : " , $vCount;  
    echo "<br>";  
    echo "\nNumber of consonants : " , $cCount;  

 $digit=preg_match_all("/[0-9]/",$str);
echo "<br>No fo digits:".$digit;

 

$length=strlen($file);
echo "<br>File size:".$length;
 
fclose($files);

?>