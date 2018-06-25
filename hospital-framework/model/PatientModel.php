<?php

//get all from Patients
function getAllPatients()
{
    //get all Patients
    $db = createDBconnection();
    $sql = "SELECT patients.patient_id, patients.patient_name , clients.client_firstname, clients.client_lastname, species.species_description, patients.patient_gender, patients.patient_status
            FROM ((patients
            INNER JOIN clients ON patients.client_id = clients.client_id)
            INNER JOIN species ON patients.species_id = species.species_id)
            ORDER BY patients.patient_name ASC";
    $result = $db->query($sql);

    return $result;
}

//create new Patient
function createPatient($data)
{
    if (!$data) {
        return false;
    }

    $patient_name = $data['patient_name'];
    $client_id = $data['client_id'];
    $species_id = $data['species_id'];
    $patient_gender = $data['patient_gender'];
    $patient_status = $data['patient_status'];

    $db = createDBconnection();

    $sql = "INSERT INTO patients (patient_name, client_id, species_id, patient_gender, patient_status) VALUES (?, ?, ?, ?, ?)";
    $query = $db->prepare($sql);
    $query->bind_param("siiss", $patient_name, $client_id, $species_id, $patient_gender, $patient_status);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}


//get all Clients and all Species
function getAllClientsAndSpecies()
{
    $db = createDBconnection();
    $sql = "SELECT * FROM clients ORDER BY client_lastname ASC";
    $sql2 = "SELECT * FROM species ORDER BY species_description ASC";

    $result = array("clients" => $db->query($sql), "species" => $db->query($sql2));


    return $result;
}


//get id from selected Patient
//id for Patient edit

function getPatient($data)
{
    if (!$data) {
        return false;
    }

    $patient_id = $data;

    $db = createDBconnection();
    $sql = "SELECT * FROM patients WHERE patient_id=$patient_id";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//edit selected Patient
function updatePatient($data)
{
    if (!$data) {
        return false;
    }

    $patient_id = $data['patient_id'];
    $patient_name = $data['patient_name'];
    $client_id = $data['client_id'];
    $species_id = $data['species_id'];
    $patient_gender = $data['patient_gender'];
    $patient_status = $data['patient_status'];

    $db = createDBconnection();

    $sql = "UPDATE patients SET patient_name=?, species_id=?, client_id=?, patient_gender=?, patient_status=? WHERE patient_id=?";
    $query = $db->prepare($sql);
    $query->bind_param("siissi", $patient_name, $species_id, $client_id, $patient_gender, $patient_status, $patient_id);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}

//delete selected Patient
function deletePatient($data)
{
    if (!$data) {
        return false;
    }

    $patient_id = $data;

    $db = createDBconnection();

    $sql = "DELETE FROM patients WHERE patient_id=$patient_id";
    $query = $db->prepare($sql);
    $query->execute();

    $db->close();

    return true;
}

