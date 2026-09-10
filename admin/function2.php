<?php

// koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "java");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function cari($search )
{
    $query = "SELECT * FROM data_ml 
WHERE userid_ml LIKE '%$search%'";
    return query($query);
}




