<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {
    Function tampilData()
    {
        $query=$this->db->get('mahasiswa');
        if ($query->num_rows()>0)
        {
        return $query->result();
        }
        else
        {
            return array();
        }

    }
    function tambah($data)
        {
            $tambah=$this->db->insert('mahasiswa',$data);
            return $tambah;
        }

    function per_nim($id)
        {
            $this->db->where('nim',$id);
            $query=$this->db->get('mahasiswa');
            return $query->result();
        }

    function hapus($id)
        {
            $this->db->where('nim',$id);
            $hapus=$this->db->delete('mahasiswa');
            return $hapus;
        }

    function update($id,$data)
        {
            $this->db->where('nim',$id);
            $update=$this->db->update('mahasiswa',$data);
            return $update;
        }
}