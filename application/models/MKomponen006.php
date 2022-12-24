<?php

class MKomponen006 extends CI_Model
{
    //Mengambil data dari tabel_aset
    private $table = 'komponen_006';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    //fungsi tambah data
    public function tambah($data_input)
    {
        $this->db->insert($this->table, $data_input);
    }

    //fungsi edit data
    public function get1($id_komponen)
    {
        return $this->db->where(['id_komponen' => $id_komponen])->get($this->table)->row_object();
    }
    public function edit($id_komponen, $data_edit)
    {
        $this->db->where(['id_komponen' => $id_komponen])->update($this->table, $data_edit);
    }

    //fungsi hapus data
    public function hapus($id_komponen)
    {
        $this->db->delete('komponen_006', ['id_komponen' => $id_komponen]);
    }
}
