<?php 

class ModelDossierSAV
{
    private $idc;
    private function connexion()
    {
        $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz", 'root', '');
    }

    public function RecupDossierSavByNumDossier($numDossier)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT SAV.* FROM T_D_DOSSIERSAV_SAV SAV 
                where SAV_NUM_DOSSIER= " . $numDossier . "");
        $res->execute();
        return $res;
    }

    public function RecupSavTypeById($id)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT STY.*, SAV.* 
        FROM t_d_savtype_sty sty inner join t_d_dossiersav_sav sav
        on STY.STY_ID=SAV.STY_ID
         where USR_ID= '" . $id . "'");
        $res->execute();
        return $res;
    }

    public function AfficheUserByNumDossier($sqlwhere)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT USR.*, SAV.* 
        FROM t_d_user_usr USR INNER JOIN t_d_dossiersav_sav SAV 
        ON USR.USR_ID=SAV.USR_ID WHERE SAV_NUM_DOSSIER ='" .$sqlwhere ."';");
        $res->execute();
        return $res;
    }



}





?>