<?php

function dump($var)
{

    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
function sanitizeValue(&$value)
{
    //trim() supprime les tableaux en debut et fin de chaine
    //strip_tags supprime les balises HTML
    $value = trim(strip_tags($value));
}

function sanitizeArray(array &$array)
{
    //applique la fonction sanitizeValur() sur tous les elements du tableau 
    array_walk($array, 'sanitizeValue');
}

function sanitizePost()
{
    //applique la fonction sanitizeValur() sur tous les elements du tableau 
    sanitizeArray($_POST);
}

function setFlashMessage($message, $type = 'success')
{
    $_SESSION['flashMessage'] = [
        'message' => $message,
        'type' => $type
    ];
}

function setFlashMessageDanger($message, $type = 'danger')
{
    $_SESSION['flashMessageDanger'] = [
        'message' => $message,
        'type' => $type
    ];
}


//affiche un message flash s'il y en a un en session
//puis le supprime
function displayFlashMessage()
{
    if (isset($_SESSION['flashMessage'])) {
        $message = $_SESSION['flashMessage']['message'];
        $type = $_SESSION['flashMessage']['type'] == 'error' ? 'danger' : $_SESSION['flashMessage']['type'];

        echo '<div class="alert alert-' . $type . '">'
            . '<h5 class="alert-heading">' . $message . '</h5>'
            . '</div>';

        //suppresion du message dans la session
        //pour affichage unique
        unset($_SESSION['flashMessage']);
    }
    if (isset($_SESSION['flashMessageDanger'])) {
        $message = $_SESSION['flashMessageDanger']['message'];
        $type = $_SESSION['flashMessageDanger']['type'] == 'error' ? 'danger' : $_SESSION['flashMessageDanger']['type'];

        echo '<div class="alert alert-' . $type . '">'
            . '<h5 class="alert-heading">' . $message . '</h5>'
            . '</div>';

        //suppresion du message dans la session
        //pour affichage unique
        unset($_SESSION['flashMessageDanger']);
    }
}

function isUserConnected()
{
    return isset($_SESSION['utilisateur']);
}

function getUserFullName()
{
    if (isUserConnected()) {
        return $_SESSION['utilisateur']['prenom'] . ' ' . $_SESSION['utilisateur']['nom'];
    }
}

function isUserAdmin()
{
    return isUserConnected()
        && $_SESSION['utilisateur']['role'] == 'Administrateur';
}

function isUserVisitor()
{
    return isUserConnected()
        && $_SESSION['utilisateur']['role'] == 'Élève';
}

function isUserSuperAdmin()
{
    return isUserConnected()
        && $_SESSION['utilisateur']['role'] == 'Super-Administrateur';
}

function panelAdminSecurity()
{
    if (!isUserAdmin() || !isUserSuperAdmin()) {
        if (!isUserConnected()) {
            header('Location:connexion.php');
        }
        if (isUserVisitor() && isUserConnected()) {
            setFlashMessageDanger('Vous n\'avez pas le droit d\'acceder à cette page. Connectez-vous.');
            header('Location:index.php');
            die;
        }
    }
    else if(isUserAdmin() &&isUserConnected() || isUserSuperAdmin() && isUserConnected()){
        header('Location:panel-admin.php');
    }
}

// function adminSecurity()
// {
//     if (!isUserAdmin() || !isUserSuperAdmin()) {
//         if (!isUserConnected()) {
//             header('location:connexion.php');
//         } else if (isUserVisitor() && isUserConnected()){
//             header('HTTP/1.1 403 Forbidden');
//             echo "Vous n'avez pas le droit d'acceder à cette page";
//         }

//         die;
//     }
//     else if(isUserAdmin() || isUserSuperAdmin() && isUserConnected()){
//         header('location:panel-admin.php');
//     }

// }
//region 'Panier'
function prixFR($prix)
{
    return number_format($prix, 2, ',', ' ') . ' €';
}

// function ajouterPanier(array $produit, $quantite)
// {
//     // initialisation du panier
//     if (!isset($_SESSION['panier'])) {
//         $_SESSION['panier'] = [];
//     }
//     // si le produit n'est pas encore dans le panier
//     if (!isset($_SESSION['panier'][$produit['PRD_ID']])) {
//         //ajout du produit dans le panier
//         $_SESSION['panier'][$produit['PRD_ID']] = [
//             'id' =>$produit['PRD_ID'],
//             'nom' => $produit['PRD_DESCRIPTION'],
//             'prix' => $produit['PRD_PRICE'],
//             'quantite' => $quantite,
//         ];
//     } else {
//         // si le produit est deja dans le panier
//         // on met a jour la quantité
//         $_SESSION['panier'][$produit['PRD_ID']]['quantite'] += $quantite;
//     }
// }



// function totalPanier()
// {
//     $total = 0;

//     if (isset($_SESSION['panier'])) {
//         foreach ($_SESSION['panier'] as $produit) {
//             $total += $produit['prix'] * $produit['quantite'];
//         }
//     }
//     return $total;
// }
// function modifierQuantitePanier($produit_ID, $quantite)
// {

//     if (isset($_SESSION['panier'][$produit_ID])) {
//         if ($quantite != 0) {
//             $_SESSION['panier'][$produit_ID]['quantite'] = $quantite;
//         } else { // si égal à 0, cela n'a plus rien à faire dans le panier donc on le supprime
//             unset($_SESSION['panier'][$produit_ID]);
//         }
//     }
// }
//Fin région Panier


// function AjouterPaiement($Paiement)
// {

//     require_once __DIR__ . '/../Model/PaymentTypeModel.php';


//     // si le type de paiement n'est pas encore dans la commande
//     if (!isset($_SESSION['commande']['type_paiement'])) {

//         $paiementType = new ModelePaymentType();
//         $paiementTypes = $paiementType->RecupPaymentTypeByLib($Paiement)->fetchAll();


//         return $paiementTypes[0]['PMT_ID'];
//     }
// }

// function AjouterExpedition($Expedition)
// {
//     require_once __DIR__ . '/../Model/ExpeditionTypeModel.php';

//     // si le type d'expedition n'est pas encore dans la commande
//     if (!isset($_SESSION['commande']['type_expedition'])) {
//         $expeditionType = new ModeleExpeditionType();
//         $expeditionTypes = $expeditionType->RecupExpeditionTypeByLib($Expedition)->fetchAll();


//         return $expeditionTypes[0]['ETY_ID'];
//     }
// }

function datetimeFR($datetimeSQL)
{
    return date("d/m/Y H:i", strtotime($datetimeSQL));
}
