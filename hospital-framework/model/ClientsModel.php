<?php

//get all from Clients
function getAllClients()
{
    $db = createDBconnection();
    $sql = "SELECT * FROM clients ORDER BY client_firstname ASC";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//create new Client
function createClient($data)
{
    if (!$data) {
        return false;
    }

    $client_firstname = $data['client_firstname'];
    $client_lastname = $data['client_lastname'];
    $client_email = $data['client_email'];
    $client_number = $data['client_number'];


    $db = createDBconnection();

    $sql = "INSERT INTO clients (client_firstname, client_lastname, client_email, client_number) VALUES (?, ?, ?, ?)";
    $query = $db->prepare($sql);
    $query->bind_param("ssss", $client_firstname, $client_lastname, $client_email, $client_number);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}

//get id from selected Client
//id for Client edit
function getClient($data)
{
    if (!$data) {
        return false;
    }

    $client_id = $data;

    $db = createDBconnection();
    $sql = "SELECT * FROM clients WHERE client_id=$client_id";
    $result = $db->query($sql);
    $db->close();

    return $result;
}

//edit selected Client
function updateClient($data)
{
    if (!$data) {
        return false;
    }

    $client_id = $data['client_id'];
    $client_firstname = $data['client_firstname'];
    $client_lastname = $data['client_lastname'];
    $client_email = $data['client_email'];
    $client_number = $data['client_number'];

    $db = createDBconnection();

    $sql = "UPDATE clients SET client_firstname=?, client_lastname=?, client_email=?, client_number=? WHERE client_id=?";
    $query = $db->prepare($sql);
    $query->bind_param("ssssi", $client_firstname, $client_lastname, $client_email, $client_number, $client_id);

    $query->execute();
    $query->close();
    $db->close();

    return true;
}

//delete selected Client
function deleteClient($data)
{
    if (!$data) {
        return false;
    }

    $client_id = $data;

    $db = createDBconnection();

    $sql = "DELETE FROM clients WHERE client_id=$client_id";
    $query = $db->prepare($sql);
    $query->execute();

    $db->close();

    return true;
}

