<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komponen006 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKomponen006');
    }

    public function home()
    {
        $data['data006'] = $this->MKomponen006->getAll();
        $this->load->view('crud/home', $data);
    }

    //Start tambah data
    public function tambahdata()
    {
        $this->load->view('crud/tambahdata');
    }
    public function prosestambah()
    {
        $merek_006 = $this->input->post('txtmerek');
        $kapasitas_006 = $this->input->post('txtkapasitas');
        $harga_006 = $this->input->post('txtharga');
        $jenis_006 = $this->input->post('txtjenis');
        $data_input = [
            'merek_006' => $merek_006,
            'kapasitas_006' => $kapasitas_006,
            'harga_006' => $harga_006,
            'jenis_006' => $jenis_006,

        ];
        $simpan = $this->MKomponen006->tambah($data_input);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Data berhasil di tambahkan !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('Komponen006/home');
    }
    //End tambah data

    //Start edit data
    public function editdata($id_komponen)
    {
        $data['data006'] = $this->MKomponen006->get1($id_komponen);
        return $this->load->view('crud/editdata', $data);
    }
    public function prosesedit()
    {
        $id_komponen = $this->input->post('txtid');
        $merek_006 = $this->input->post('txtmerek');
        $kapasitas_006 = $this->input->post('txtkapasitas');
        $harga_006 = $this->input->post('txtharga');
        $jenis_006 = $this->input->post('txtjenis');
        $data_edit = [
            'merek_006' => $merek_006,
            'kapasitas_006' => $kapasitas_006,
            'harga_006' => $harga_006,
            'jenis_006' => $jenis_006,

        ];
        $this->MKomponen006->edit($id_komponen, $data_edit);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Data berhasil di Ubah !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('Komponen006/home');
    }
    //End edit data


    //Start hapus data
    public function hapus_data($id_komponen)
    {
        $this->MKomponen006->hapus($id_komponen);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Data berhasil di Hapus !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('Komponen006/home');
    }
    //End hapus data
}
