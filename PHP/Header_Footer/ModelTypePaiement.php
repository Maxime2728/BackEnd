<?php

class ModeleAddress
{
    private $idc;
    private function connexion()
    {

        $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    public function RecupPaymentTypeById($id)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT pmt.* FROM T_D_PAYMENTTYPE_PMT PMT 
                where PMT_ID= " . $id . "");
        $res->execute();
        return $res;
    }

    public function RecupPaymentTypeByLib($usrid)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT PMT.*  FROM T_D_PAYMENTTYPE_PMT PMT
        where PMT_WORDING= '" . $type . "'");
        $res->execute();
        return $res;
    }

     //Fonction pour recup tous les types de paiement
     public function RecupPaymentTypeAll()
     {
         $this->connexion();
         $res = $this->idc->prepare("SELECT PMT.*  FROM T_D_PAYMENTTYPE_PMT PMT");
         $res->execute();
      
         return $res;
     }
}

?>