<?php


namespace App\Controller;


use Core\Model\DbInterface;
use App\Model\ProductModel;
use Core\Controller\Controller;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->ProductModel = new ProductModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeProduct()
    {
        $products = $this->ProductModel->findAll();
        return $this->render("product/indexProductView", [
            'products' => $products,
        ]);
    }

    public function newProduct()
    {

        if (!empty($_POST)) {
            $product = array_splice($_POST, 0, 6);

            $this->dbInterface->save($product, 'product');

            return $this->redirectToRoute('homeProductAdmin');

        }

        return $this->render("admin/product/newProductView");
    }


    public function singleProduct()
    {
        $product = $this->ProductModel->find($_GET["id"]);
        return $this->render("product/singleProductView", ['product' => $product]);
    }

    public function modifyProduct()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('product', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singleProductAdmin', $_GET["id"]);
        }
        $product = $this->ProductModel->find($_GET["id"]);
        return $this->render("admin/product/modifyProductView", ['product' => $product]);
    }

    public function deleteProduct()
    {
        $this->dbInterface->delete('product', $_GET["id"]);
        return $this->redirectToRoute('homeProductAdmin');

    }

}
