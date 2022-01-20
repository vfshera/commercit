<? php
use Safaricom\Mpesa\Mpesa;

class MpesaService{

    public static b2c(){
        $mpesa= new Mpesa();

$b2cTransaction = $mpesa->b2c($InitiatorName,
 $SecurityCredential, 
 $CommandID,
  $Amount,
   $PartyA,
    $PartyB,
     $Remarks, 
     $QueueTimeOutURL,
      $ResultURL, 
      $Occasion);

      return $b2cTransaction;
    }
}