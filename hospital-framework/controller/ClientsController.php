<?php

require(ROOT . "model/ClientsModel.php");

//load Clients index
function index()
{
    render("clients/index", array(
        'data' => getAllClients()
    ));
}

//create new Client
function create()
{
    render("clients/create");
}

function createSave()
{
    if (!createClient($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "clients/index");
}

//update Client
function update($data)
{
    render("clients/update", array(
        'data' => getClient($data)
    ));
}

function updateSave()
{
    if (!updateClient($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "clients/index");
}

//delete Client
function delete($data)
{
    if (!deleteClient($data)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "clients/index");
}