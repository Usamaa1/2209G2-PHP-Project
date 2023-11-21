
<!-- Access Modifier -->

<!-- Private -->
<!-- Public -->
<!-- Protected -->


<?php

class BankAccount 
{
   public $accountHolder;
   public $accountNumber;
   private $pincode;


    public function __construct($aH, $aN, $pC)
    {
        $this->accountHolder = $aH;
        $this->accountNumber = $aN;
        $this->pincode = $pC;
    }



}


    $asfarAccount = new BankAccount('Asfar Ahmed',7823748723, 3456);

    // echo $asfarAccount->pincode;
    print_r($asfarAccount);









?>