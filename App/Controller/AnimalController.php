<?php

namespace App\Controller;


use Core\Model\DbInterface;
use App\Model\AnimalModel;
use Core\Controller\Controller;

class AnimalController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeAnimal()
    {
        $animals = $this->AnimalModel->findAll();
        return $this->render("animal/indexView", [
            'animals' => $animals,
        ]);
    }

    public function newAnimal()
    {

        if (!empty($_POST)) {
            $animal = array_splice($_POST, 0, 6);


            $this->dbInterface->save($animal, 'animal');


            return $this->redirectToRoute('homeAnimalAdmin');

        }

        return $this->render("admin/animal/newView");
    }


    public function single()
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("animal/singleView", ['animal' => $animal]);
    }

    public function modify()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('animal', $_POST, $_GET["id"]);
            return $this->redirectToRoute('homeAnimalAdmin', $_GET["id"]);
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("admin/animal/modifyView", ['animal' => $animal]);
    }

    public function delete()
    {
        $this->dbInterface->delete('animal', $_GET["id"]);
        return $this->redirectToRoute('homeAnimalAdmin');
    }

    public function reservation (){

        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("reservation/reservationView", ['animal' => $animal]);


        return $this->render("user/signup", ["message" => $message]);
    }

    public function reservationDate (){

        return $this->render("reservation/reservationIndex");
    }
}
