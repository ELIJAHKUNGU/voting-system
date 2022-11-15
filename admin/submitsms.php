<?php
// Sets our destination URL
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];


    $UserName  = '0759738917' ;     // username on  @ www.lulusms.com
    $Password  = 'cheruiyotronald1168';          // PAssword on www.lulusms.com
    $From      = 'lulusms.com';     // Change to your alpha numeric short code when assigned
    $To        =$phonenumber ;    // Mobile number of receipient
    $SMS       =$message;   // Message to be sent out to customer
    

    // Creates our data array that we want to post to the endpoint
    $data_to_post = [
       // 'AccountNo' => $AccountNo,
        'UserName' => $UserName,  
        'Password' => $Password ,  
        'To' => $To ,  
        'SMS' => $SMS,
        'From' => $From ,

    ];

    // Sets our options array so we can assign them all at once
    $options = [
        CURLOPT_URL             => 'https://www.lulusms.com/api/sendsmsapiv3',
        CURLOPT_POST            => true,
        CURLOPT_SSL_VERIFYHOST  => 0, 
        CURLOPT_SSL_VERIFYPEER  => 0, 
        CURLOPT_POSTFIELDS      => $data_to_post,
        CURLOPT_RETURNTRANSFER  => 1, // Return the transfer as a string
    ];

    // Initiates the cURL object
    $curl = curl_init();

    // Assigns our options
    curl_setopt_array($curl, $options);


    // Executes the cURL POST
    $results = curl_exec($curl);
 
  
    // Turn the results into an associative array
    $returned_text = json_decode($results, true);

    // Get the status of message
    $Status = trim($returned_text['Status']);

 
    // Get the message status
    $StatusMessage = $returned_text['StatusMessage'];
     
     
    // If status is OK proceed
    if (strcasecmp($Status, "OK")== 0)
    {
        $SMSRefNumber = $returned_text['SMSRefNumber'];
        $SMSUnitsBalance = $returned_text['SMSUnitsBalance'];

       
        echo "Message   sent successfully <a href='./index.php'>GO BACK </a>";// comment out when live
         /*echo "The Units balance is $SMSUnitsBalance '<br>'";// comment out when live
    
        echo "The status message returned by the server is  - $StatusMessage ";// comment out when live
        echo "<br>";// comment out when live
        */
        if ($SMSUnitsBalance < 10) {
            /*
            echo '<br>'; // comment out when live
            echo "YOU NEED TO TOP UP. The balance is " . $SMSUnitsBalance . "<br>";// comment out when live
            */
        }
        ///////////// Your code processing logic here including updating your database
    }
    else 
    {
        /*
        echo '<br>'; // comment out when live
        echo "ERROR *********Not successful. The following error has been generated " . $StatusMessage . '<br>';
             ///////////// Your code error processing logic here including updating your database
         */
    }
 
    // Be kind, tidy up!
    curl_close($curl);
?>