<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
$idade = 17;
$acompanhado = true;
 
$responseOk = "Você tem $idade, pode entrar!";
$responseAcompanhado = "Tu é de menor, mas ta acompanhado, entra!";
$responseNo = "Você só pode entrar se tiver mais do que 18 anos.\n";

if($idade >= 18){
   echo $responseOk;
} else if($idade <18 && $acompanhado) {
   echo $responseAcompanhado;
} else {
   echo $responseNo;
}



