<?php

// php 연습① 전시회 관람료 계산
$age = 28;

$welfare = "no"; //yes: 복지 카드 有, no: 복지 카드 無
$youknog = "no"; //yes: 국가유공자증 有, no: 국가유공자증 無
$after16 = "yes"; //yes: 16시 이후 입장, no: 16시 이전 입장

if($age < 3)    //관람료 무료
    $fee = "free";

elseif(($age >=3 && $age <= 13) || ($after16 == "yes"))  //특별할인
    $fee = "5,000원";

elseif(($age >=14 && $age <= 18) || ($age >= 65) || ($welfare == "yes") || ($youknog = "yes"))  //할인
    $fee = "8,000원";

else    //일반
    $fee = "12,000원";

    echo "<br>복지 카드: $welfare<br>";
    echo "국가유공자증: $youknog<br>";
    echo "16시 이후 입장: $after16<br>";
    echo "나이: $age<br>";
    echo "관람료: $fee<br>";  
?>