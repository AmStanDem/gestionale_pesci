<?php

function addPesce($sesso, $id_specie, $dt_nascita, $conn)
{
    $sql = "INSERT INTO pesce (sesso,id_specie,dt_nascita)
            VALUES 
            ('$sesso','$id_specie','$dt_nascita')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {

        return false;
    }
}
function updatePesce($sesso, $id_specie, $dt_nascita, $conn)
{

}
