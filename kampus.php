<?php
include("./connection.php"); // untuk menyisipkan file connection.php kedalam file kampus.php

function get_kampus()
{
  global $connection; // global variable adalah memory yang menyimpan suatu nilai yang berlaku di seluruh project yang sedang dijalankan, dalam hal ini menyimpan nilai yang ada dalam variable connection
  $query = "SELECT * FROM Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022"; // query adalah syntax atau perintah yang dipakai agar dapat dapat saling berinteraksi, dalam hal ini yaitu database tabel kampus
  $response = array(); // query adalah syntax atau perintah yang dipakai agar dapat dapat saling berinteraksi, dalam hal ini yaitu database tabel kampus
  $result = mysqli_query($connection, $query); // $result adalah variabel hasil menjalankan query MySQL yang berasar dari fungsi mysql_query() berdasarkan connection dan query yang telah dikonfigurasikan sebelumnya
  while ($row = mysqli_fetch_array($result)) {
    $response[] = array("id" => $row["id"], "Provinsi" => $row["Provinsi"], "Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri" => $row["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri"], 
    "Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta" => $row["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta"],
    "Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta" => $row["Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta"]);
  } // $row untuk menampung asil fungsi mysql_fetch_array(). Hasil dari fungsi mysql_fetch_array() berupa tipe data array
  // $result adalah variabel hasil menjalankan query MySQL yang berasar dari fungsi mysql_query().
  // $response untuk menampilkan hasil dari data yang akan kita tampilkan dalam bentuk array dengan ketentuan $row pertama konstanta nama_kampus, dan seterusnya.
  header('Content-Type: application/json'); // untuk menentukan tipe konten, dalam hal ini kita akan menentukan konten dalam bentuk json, maka dilakukan dalam fungsi header
  echo json_encode($response); // Fungsi json_encode() mengembalikan representasi JSON dari suatu nilai. Dengan kata lain, ia mengubah variabel PHP (berisi array) menjadi JSON.
}

function get_kampusById($id = 0)
{
  global $connection;
  $query = "SELECT * FROM Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022";
  if ($id != 0) {
    $query .= " WHERE id=" . $id . " LIMIT 1";
  }
  $response = array();
  $result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_array($result)) {
    $response[] = array("id" => $row["id"], "Provinsi" => $row["Provinsi"], "Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri" => $row["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri"], 
    "Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta" => $row["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta"],
    "Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta" => $row["Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta"],
    "Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta" => $row["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta"]);
  }
  header('Content-Type: application/json');
  echo json_encode($response);
}

function insert_kampus()
{
  global $connection;
  $data = json_decode(file_get_contents('php://input'), true);
  $provinsi = $data["Provinsi"];
  $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri = $data["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri"];
  $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta = $data["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta"];
  $Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta = $data["Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri = $data["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta = $data["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta = $data["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta"];
  echo $query = "INSERT INTO Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022 SET 
     Provinsi='" . $provinsi . "', 
     Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri='" . $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri . "', 
     Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta='" . $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta . "',
     Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta='" . $Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta . "',
     Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri . "',
     Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta . "',
     Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta . "'";
  if (mysqli_query($connection, $query)) {
    $response = array(
      'status' => 1,
      'status_message' => 'Kampus Added Successfully.'
    );
  } else {
    $response = array(
      'status' => 0,
      'status_message' => 'Kampus Addition Failed.'
    );
  }
  header('Content-Type: application/json');
  echo json_encode($response);
}

function update_kampus($id)
{
  global $connection;
  $post_vars = json_decode(file_get_contents("php://input"), true);
  $provinsi = $post_vars["Provinsi"];
  $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri = $post_vars["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri"];
  $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta = $post_vars["Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta"];
  $Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta = $post_vars["Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri = $post_vars["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta = $post_vars["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta"];
  $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta = $post_vars["Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta"];
  $query = "UPDATE Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022 SET Provinsi='" . $provinsi . "', 
  Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri='" . $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri . "', 
  Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta='" . $Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta . "',
  Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta='" . $Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta . "',
  Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri . "',
  Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta . "',
  Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta='" . $Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta . "' WHERE id=" . $id;
  if (mysqli_query($connection, $query)) {
    $response = array(
      'status' => 1,
      'status_message' => 'Kampus Updated Successfully.'
    );
  } else {
    $response = array(
      'status' => 0,
      'status_message' => 'Kampus Updation Failed.'
    );
  }
  header('Content-Type: application/json');
  echo json_encode($response);
}

function delete_kampus($id)
{
  global $connection;
  $query = "DELETE FROM Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022 WHERE id=" . $id;
  if (mysqli_query($connection, $query)) {
    $response = array(
      'status' => 1,
      'status_message' => 'Kampus Deleted Successfully.'
    );
  } else {
    $response = array(
      'status' => 0,
      'status_message' => 'Kampus Deletion Failed.'
    );
  }
  header('Content-Type: application/json');
  echo json_encode($response);
}


$db = new dbObject();
$connection = $db->getConnstring();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
  case 'GET':
    // Retrive Products
    if (!empty($_GET["id"])) {
      $id = intval($_GET["id"]);
      get_kampusById($id);
    } else {
      get_kampus();
    }
    break;
  case 'POST':
    // Insert Product
    insert_kampus();
    break;
  case 'PUT':
    // Update Product
    $id = intval($_GET["id"]);
    update_kampus($id);
    break;
  case 'DELETE':
    // Delete Product
    $id = intval($_GET["id"]);
    delete_kampus($id);
    break;
  default:
    // Invalid Request Method
    header("HTTP/1.0 405 Method Not Allowed");
    break;
}
