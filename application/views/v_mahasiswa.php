<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
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
        .topnav {
            overflow: hidden;
            background-color: #333;
            }

            .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            .topnav a:hover {
            background-color: #5b00ab;
            color: white;
            }

            .topnav a.active {
            background-color: #5b00ab;
            color: white;
            }

            .topnav .icon {
            display: none;
            }

            @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
            }

            @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
            }
    </style>
</head>
<body>
    <div class="topnav" id="myTopnav">
		<a href="<?= base_url('index.php/') ?>" >Home</a>
		<a href="#" class="active">Mahasiswa</a>
        <a href="<?= base_url('index.php/C_Report') ?>">Report</a>
	</div>
    <h1>Ini View Mahasiswa</h1>

<table width="50%" border="1">
    <tr>
        <td>Nim</td>
        <td>Nama</td>
        <td>Jurusan</td>
        <td>Alamat</td>
        <td>Opsi</td>
    </tr>
    <tr>
        <?php foreach ($data as $row):?>
        <td><?php echo $row->nim;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->jurusan;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><center><button><a href= '<?php base_url();?>C_Mahasiswa/edit/<?php echo $row->nim;?>'>Update</a></button> || <button><a href= '<?php base_url();?>C_Mahasiswa/hapus/<?php echo $row->nim;?>'>Delete</button></center></td>
    </tr>
        <?php endforeach;?>
        
</table>
<br><br>
==========================================================================================

<?php echo form_open('C_Mahasiswa/tambah');?>
    <pre>
    <h1>Tambah Data Mahasiswa</h1>
        Nim     : <input type="text" name="nim" placeholder="nim" required autofocus><br>
        Nama    : <input type="text" name="nama" placeholder="nama" required><br>
        Jurusan : <input type="text" name="jurusan" placeholder="jurusan" required><br>
        Alamat  : <input type="text" name="alamat" placeholder="alamat" required><br>
        <input type="submit" value="Simpan">
    </pre>
<?php form_close();?>


</body>
</html>