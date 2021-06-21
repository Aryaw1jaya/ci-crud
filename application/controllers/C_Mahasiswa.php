<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Mahasiswa extends CI_Controller {
    Function __construct()
    {
        Parent::__construct();
        $this->load->model('M_Mahasiswa');
    }

	public function index()
	{
        $data['data']=$this->M_Mahasiswa->tampilData();
        $this->load->view('v_mahasiswa',$data);

	}
    function tambah()
    {
        $data=array(
        'nim'=>$this->input->post('nim'),
        'nama'=>$this->input->post('nama'),
        'jurusan'=>$this->input->post('jurusan'),
        'alamat'=>$this->input->post('alamat')
        );
        $this->M_Mahasiswa->tambah($data);
        redirect('C_Mahasiswa');
    }
    function edit()
    {
        $nim=$this->uri->segment(3);
        $data['data']=$this->M_Mahasiswa->per_nim($nim);
        $this->load->view('v_update_mahasiswa',$data);
    }
    function update()
    {
        $nim=$this->input->post('nim');
        $data=array(
        'nama'=>$this->input->post('nama'),
        'jurusan'=>$this->input->post('jurusan'),
        'alamat'=>$this->input->post('alamat')
        );
        $this->M_Mahasiswa->update($nim,$data);
        redirect ('C_Mahasiswa');
    }
    function hapus()
    {
        $nim=$this->uri->segment(3);
        $this->M_Mahasiswa->hapus($nim);
        redirect ('C_Mahasiswa');
    }


}
