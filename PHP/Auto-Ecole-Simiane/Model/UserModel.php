<?php

class ModeleUser
{
    private $idc;
    private function connexion()
    {

        $this->idc = new PDO("mysql:host=localhost;  dbname=autoecolesimiane", 'root', '');
    }

    //Fonction pour afficher un user par rapport à son identifiant
    public function RecupUser($id)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT USR.*,UTY_LIBELLE FROM user USR inner join T_D_USERTYPE_UTY UTY
on USR.UTY_ID=UTY.UTY_ID
 where USR_ID= " . $id . "");
        $res->execute();
        return $res;
    }

    public function CountAllUserInscri()
    {
        
        $this->connexion();
        $res = $this->idc->query("SELECT COUNT(USR_ID) as count FROM t_d_user_usr");
        $res->execute();
        return $res;
    }

    public function RecupUserAll()
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT * FROM t_d_user_usr USR LEFT JOIN t_d_permis_reussi_type_prt PRT ON USR.PRT_ID=PRT.PRT_ID 
        LEFT JOIN t_d_usertype_uty UTY ON USR.UTY_ID=UTY.UTY_ID");
        $res->execute();
        return $res;
        $nb = $res->fetch();
        return $nb;
    }
    

    //Fonction pour afficher un user par rapport à son mail
    public function RecupUserByMail($email)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT USR.*,UTY_LIBELLE  as 'role'  FROM T_D_USER_USR USR inner join T_D_USERTYPE_UTY UTY
    on USR.UTY_ID=UTY.UTY_ID
     where USR_MAIL= '" . $email . "'");
        $res->execute();
        return $res;
    }



    //Fonction pour recup le nombre d'utilisateurs pour un mail
    public function RecupCountUsers($email)
    {
        $this->connexion();
        $res = $this->idc->prepare("SELECT count(*) FROM T_D_USER_USR 
     where USR_MAIL= '" . $email . "'");
        $res->execute();
        $nb = $res->fetchColumn();
        return $nb;
    }


    public function InsertUser($nom, $prenom, $email, $mdp, $phone)
    {
        $this->connexion();
        $query = 'INSERT INTO T_D_USER_USR
        ( USR_MAIL,
        USR_PHONE,
        USR_PASSWORD,
        USR_FIRSTNAME,
        USR_LASTNAME,
        UTY_ID,
        PRT_ID)
         VALUES (
            :email,
            :phone,
            :mdp,
            :prenom,
            :nom,
            0, -- par défaut on le met en type utilisateur visiteur
            1 -- par défaut on le met en type permis pas passé
        )'; 

        $stmt = $this->idc->prepare($query);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':phone' => $phone,
            // enregistrement du mot de passe a l'enregistrement
            ':mdp' => sha1($mdp)
        ]);

        // on retourne le dernier id
        return $id = $this->idc->lastInsertId();
    }
}
?>