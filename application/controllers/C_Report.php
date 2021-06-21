<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_Report extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();  
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0,7,'REPORT MAHASISWA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0,'C');
        $pdf->Cell(55,6,'NAMA',1,0,'C');
        $pdf->Cell(55,6,'JURUSAN',1,0,'C');
        $pdf->Cell(60,6,'ALAMAT',1,1,'C');
        $orders = $this->db->get('mahasiswa')->result();
        foreach ($orders as $row){
            $pdf->Cell(20,6,$row->nim,1,0);
            $pdf->Cell(55,6,$row->nama,1,0);
            $pdf->Cell(55,6,$row->jurusan,1,0);
            $pdf->Cell(60,6,$row->alamat,1,1); 
        }
        $pdf->Output();
    }
}

?>