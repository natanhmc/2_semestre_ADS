<?php
class ProductController
{
    public function listProduct()
    {
        require_once('models/ProductModel.php');
        $ProductModel = new ProductModel();
        $result = $ProductModel->listProduct();

        $arrayClients =  array();

        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        require_once('views/templates/header.php');
        require_once('views/product/listProduct.php');
        require_once('views/templates/footer.php');
    }
}
