<?php

require(ROOT . "model/PatientModel.php");

//load Patients index
function index()
{
    render("patients/index", array(
        'data' => getAllPatients()
    ));
}

//create new Patient
function create()
{
    if (!getAllClientsAndSpecies()) {
        header("Location:" . URL . "error/index");
        exit();
    }
    render("patients/create", array(
        'data' => getAllClientsAndSpecies()
    ));
}

function createSave()
{
    if (!createPatient($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "patients/index");
}

//update Patient
function update($data)
{
    render("patients/update", array(
        'data' => getAllClientsAndSpecies(), 'dataPatient' => getPatient($data)
    ));
}

function updateSave()
{
    if (!updatePatient($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "patients/index");
}

//delete Patient
function delete($data)
{
    if (!deletePatient($data)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "patients/index");
}