<?php
if(isset($_POST['login'])){
$fields = array(
    "message" => "Your OTP Is $rand",
    "language" => "english",
    "route" => "q",
    "numbers" => "$phone",
    
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: 4eHUN7w2n9jI6OBGiXDEPLpzQsS3o0lAxZug1bVqCtTFJRkcWfIMJNESGVl3hvR08BKUOycprPCfjik4",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
Quick SMS Route Success Response:
{
    "return": true,
    "request_id": "lwdtp7cjyqxvfe9",
    
    echo'<script>alert("OTP sent successfully")</script>';
    
}
}
?>









<!-- https://www.fast2sms.com/dev/bulkV2 -->