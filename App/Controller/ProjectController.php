<?php


namespace App\Controller;

use App\Model\DonModel;
use Core\Model\DbInterface;
use App\Model\AnimalModel;
use App\Model\ProductModel;
use Core\Controller\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();

        $this->ProductModel = new ProductModel();

        $this->DonModel = new DonModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeProject(){

        $product = $this->ProductModel->findAll();
        $animal = $this->AnimalModel->findAll();

        return $this->render("indexProjectView", [
            'product' => $product,'animal' => $animal
        ]);
    }

    public function admin(){

        $product = $this->ProductModel->findAll();
        $animal = $this->AnimalModel->findAll();

        return $this->render("admin/indexAdmin", [
            'product' => $product,'animal' => $animal
        ]);
    }

    public function adminForm()
    {
        return $this->render("admin/protection/traitement_admin");
    }

    public function adminDashboard()
    {
        return $this->render("admin/dashboard");
    }

    public function homeAnimalAdmin()
    {
        $animals = $this->AnimalModel->findAll();
        return $this->render("admin/animal/indexAnimalAdminView", [
            'animals' => $animals,
        ]);
    }

    public function singleAnimalAdmin()
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("admin/animal/singleAdminView", ['animal' => $animal]);
    }

    public function homeAnimalProduct()
    {
        $products = $this->ProductModel->findAll();
        return $this->render("admin/product/indexProductAdminView", [
            'products' => $products,
        ]);
    }

    public function singleProductAdmin()
    {
        $product = $this->ProductModel->find($_GET["id"]);
        return $this->render("admin/product/singleProductAdminView", ['product' => $product]);
    }

}
