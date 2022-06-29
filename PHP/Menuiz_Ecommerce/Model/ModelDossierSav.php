<?php 

class ModelDossierSAV
{
    private $idc;
    private function connexion()
    {
        $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz", 'root', '');
    }

    public function RecupSavTypeById($id)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT STY.*, SAV.* 
        FROM t_d_savtype_sty sty inner join t_d_dossiersav_sav sav
        on STY.STY_ID=SAV.STY_ID
         where USR_ID= '" . $id . "';");
        $res->execute();
        return $res;
    }

    public function AfficheDossierSAV($sqlwhere)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT OHR.*, SAV.*, USR.USR_MAIL, 
        USR.USR_LASTNAME 
        FROM t_d_orderheader_ohr OHR left JOIN t_d_dossiersav_sav SAV
         ON OHR.ohr_ID=SAV.ohr_ID 
        INNER JOIN t_d_user_usr USR ON OHR.USR_ID=USR.USR_ID 
        WHERE '" .$sqlwhere ."';");
        $res->execute();
        return $res;
    }

    public function Affiche($sqlwhere)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT OHR.*, SAV.*, USR.USR_MAIL, USR.USR_LASTNAME 
        FROM t_d_orderheader_ohr OHR left JOIN t_d_dossiersav_sav SAV ON OHR.ohr_ID=SAV.ohr_ID 
        INNER JOIN t_d_user_usr USR ON OHR.USR_ID=USR.USR_ID WHERE '" .$sqlwhere ."';");
        $res->execute();
        return $res;
    }



}





?>