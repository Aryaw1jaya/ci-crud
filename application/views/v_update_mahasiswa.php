<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa - Update</title>
    <style>
        body {
			margin-top: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            background-size: cover;
            color: white;
            background-color: #5b00ab;
            background-image: url(<?php echo base_url();?>/assets/andromeda.jpg)
		}
    td{
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Ini Update Mahasiswa</h1>
    <button ><a href="<?= base_url('index.php/C_Mahasiswa') ?>">KEMBALI</a></button>
<?php foreach ($data as $row):?>
<?php echo form_open('C_Mahasiswa/update');?>
    <pre>
    <h1>Update Data Mahasiswa</h1>
        Nim     : <input type="text" name="nim" value="<?php echo $row->nim;?>" readonly><br>
        Nama    : <input type="text" name="nama" value="<?php echo $row->nama;?>"><br>
        Jurusan : <input type="text" name="jurusan" value="<?php echo $row->jurusan;?>"><br>
        Alamat  : <input type="text" name="alamat" value="<?php echo $row->alamat;?>"><br>
        <input type="submit" value="Update">
    </pre>
<?php endforeach;?>
<?php form_close();?>


</body>
</html>