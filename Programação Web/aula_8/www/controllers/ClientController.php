<?php
class ClientController
{
    public function register()
    {
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }


    public function registerView()
    {

        if (isset($_POST['accept'])) {
            $accept = true;
            $acceptView = "Termo aceito.";
        } else if (isset($_POST['noAccept'])) {
            $accept = false;
            $acceptView = "Termo não aceito";
        } else if (isset($_POST['pass'])) {
            $accept = false;
            $acceptView = "Está só de passagem";
        }



        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender'],
            'turno' => $_POST['turno'],
            'accept' => $accept,
            'acceptView' => $acceptView
        );



        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
    }
    public function listClient()
    {
        require_once('models/ClientModel.php');
        $ClientsModel = new ClientModel();
        $result = $ClientsModel->listClient();

        $arrayClients =  array();

        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        require_once('views/templates/header.php');
        require_once('views/client/listClient.php');
        require_once('views/templates/footer.php');
        

    }
}
