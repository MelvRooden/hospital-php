<?php

require(ROOT . "model/SpeciesModel.php");

//load Species index
function index()
{
    render("species/index", array(
        'data' => getAllSpecies()
    ));
}

//create new Species
function create()
{
    render("species/create");
}

function createSave()
{
    if (!createSpecies($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "species/index");
}

//update Species
function update($data)
{
    render("species/update", array(
        'data' => getSpecies($data)
    ));
}

function updateSave()
{
    if (!updateSpecies($_POST)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "species/index");
}

//delete Species
function delete($species_id)
{
    if (!deleteSpecies($species_id)) {
        header("Location:" . URL . "error/index");
        exit();
    }

    header("Location:" . URL . "species/index");
}