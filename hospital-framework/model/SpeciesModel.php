<?php

//get all from Species
function getAllSpecies()
{
    $db = createDBconnection();
    $sql = "SELECT * FROM species ORDER BY species_description ASC";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//create new Species
function createSpecies($data)
{
    if (!$data) {
        return false;
    }

    $species_description = $data['species_description'];

    $db = createDBconnection();

    $sql = "INSERT INTO species (species_description) VALUES (?)";
    $query = $db->prepare($sql);
    $query->bind_param("s", $species_description);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}

//get id from selected Species
//id for Species edit
function getSpecies($species_id)
{
    if (!$species_id) {
        return false;
    }

    $db = createDBconnection();
    $sql = "SELECT * FROM species WHERE species_id=$species_id";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//edit selected Species
function updateSpecies($data)
{
    if (!$data) {
        return false;
    }

    $species_id = $data['species_id'];
    $species_description = $data['species_description'];

    $db = createDBconnection();

    $sql = "UPDATE species SET species_description=? WHERE species_id=?";
    $query = $db->prepare($sql);
    $query->bind_param("si", $species_description, $species_id);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}

//delete selected Species
function deleteSpecies($species_id)
{
    if (!$species_id) {
        return false;
    }

    $db = createDBconnection();

    $sql = "DELETE FROM species WHERE species_id=$species_id";
    $query = $db->prepare($sql);
    $query->execute();

    $db->close();

    return true;
}

