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





}





?>