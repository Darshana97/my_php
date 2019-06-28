<?php

$marks = 98;

if($marks>=0 && $marks<=100){

    if($marks>=75)
    {
        echo 'your grade is A';
    }
    else if($marks>=65)
    {
        echo 'your grade is B';
    }
    else if($marks>=55)
    {
        echo 'your grade is C';
    }
    else if($marks>=35)
    {
        echo 'your grade is S';
    }
    else
    {
        echo "you're failed";
    }
}
else
{
    echo 'invalid marks';
}

?>