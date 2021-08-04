<?php
    //UTS6
    //koneksi ke database mysql
    include "conn.php";

    //membuat query/sql untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM karyawan";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
       //echo $data["nama_karyawan"]." ";

       //tampung dalam array
        $item[] = array(
            'nama'=>$data["nama_karyawan"],
            'nik'=>$data["NIK"],
            'alamat'=>$data["alamat"],
            'id'=>$data["id_karyawan"]
        );
    }

    $response = array(
        'status'=>'OK',
        'data'=>$item
    );

    echo json_encode($response);
?>