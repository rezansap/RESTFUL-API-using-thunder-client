<?php
$ArrContextOptions=Array(
    "ssl"=>Array (
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

$LinkAPI = "http://localhost/Projects/kampus/";
$Response = file_get_contents($LinkAPI, false, stream_context_create($ArrContextOptions));

// mencode kampus.json
$data = json_decode($Response, true);

?>

<!DOCTYPE html>
<html>
    <body>
    <h4 style="text-align: center;">Data Jumlah Perguruan Tinggi dan Jumlah Mahasiswa Di Indonesia<br>
        <a href="https://www.bps.go.id/indikator/indikator/view_data_pub/0000/api_pub/cmdTdG5vU0IwKzBFR20rQnpuZEYzdz09/da_04/1">Badan Pusat Statistik</a><br>
        <small class="text-muted">Berdasarkan Data Tahun 2020 dan 2021</small>
    </h4>
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr class="text-center">
                <th>id</th>
                <th>Provinsi</th>
                <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Negeri</th>
                <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Swasta</th>
                <th>Jumlah Perguruan Tinggi di Bawah KemristekDikti Negeri dan Swasta</th>
                <th>Jumlah Mahasiswa di Bawah KemristekDikti Negeri</th>
                <th>Jumlah Mahasiswa di Bawah KemristekDikti Swasta</th>
                <th>Jumlah Mahasiswa di Bawah KemristekDikti Negeri dan Swasta</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php foreach ($data as $row): ?>
                <tr class="table-success">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['Provinsi'] ?></td>
                    <td><?= $row['Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri'] ?></td>
                    <td><?= $row['Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta'] ?></td>
                    <td><?= $row['Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta'] ?></td>
                    <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri'] ?></td>
                    <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta'] ?></td>
                    <td><?= $row['Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
    </body>
        <div class="text-center" style="background-color:black">
            
        </div>
    
</html>