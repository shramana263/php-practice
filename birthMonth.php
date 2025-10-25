<?php

$var = readline("Enter your birth month (1-12): ");
switch ($var) {
    case 1:
        echo "You were born in January.";
        break;
    case 2:
        echo "You were born in February.";
        break;
    case 3:
        echo "You were born in March.";
        break;
    case 4:
        echo "You were born in April.";
        break;
    case 5:
        echo "You were born in May.";
        break;
    case 6:
        echo "You were born in June.";
        break;
    case 7:
        echo "You were born in July.";
        break;
    case 8:
        echo "You were born in August.";
        break;
    case 9:
        echo "You were born in September.";
        break;
    case 10:
        echo "You were born in October.";
        break;
    case 11:
        echo "You were born in November.";
        break;
    case 12:
        echo "You were born in December.";
        break;
    default:
        echo "Invalid month. Please enter a number between 1 and 12.";
        break;

}
?>