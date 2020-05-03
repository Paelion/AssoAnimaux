<?php

namespace App\Controller;


use Core\Model\DbInterface;

use App\Model\ProductModel;
use App\Model\CommandeModel;
use App\Model\LigneCommandeModel;

use Core\Controller\Controller;

class CommandeController extends Controller
{
    public function __construct()
    {

        $this->ProductModel = new ProductModel();
        $this->CommandeModel = new CommandeModel();
        $this->LigneCommandeModel = new LigneCommandeModel();
        $this->dbInterface = new DbInterface();

    }

    public function homePanier()
    {
        $commandes = $this->CommandeModel->findAll();
        return $this->render("panier/commandeView", [
            'commandes' => $commandes]);
    }

    public function PanierAccess()
    {
        return $this->render("panier/landingStartPanierView");
    }
}
