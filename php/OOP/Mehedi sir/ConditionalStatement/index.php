<?php 
$paymentStatus = "1";

// if(1 == $paymentStatus)      
// {
//     print "Paid";
// }
// elseif(2 == $paymentStatus)
// {
//     print "Pending Payment";
// }
// elseif(3 == $paymentStatus)
// {
//     print "Card Invalid";
// }
// else{
//     print "Invalid Card No";
// }

// 1 sacaler value
// == comparison operator
// = assingment operator
// stic comparison operator
// lus comparison operator
print PHP_EOL;
// switch($paymentStatus)
// {
//     case 1:
//         print "paid";
//         break;
//     case 2: 
//         print "Pending Payment";
//         break;
//     case 3:
//         print "Card Invalid";
//         break;    
//     default:
//         print "Invalid Card No";
//         break;
// }
print PHP_EOL;
match ($paymentStatus) {
    1       => "paid",
    2       => "Pending Payment" ,
    3       => "Card Invalid",
    // default => "Invalid Card No",
};

?>