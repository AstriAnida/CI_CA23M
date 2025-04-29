<?php
defined('BASEPATH')OR exit('No Direct script access allowed');

class kategori_model extends CI_model{
    public function get_all_kategori(){
    return $this->db->get('kategori')->result_array();
    }
    public function insert_kategori($data){
    return $this->db->insert('kategori', $data);
}
public function delete_kategori($idkategori){
    return $this->db->delete('kategori', ['idkategori'=>$idkategori]);
}
public function get_kategori_by_id($idkategori){
    return $this->db->get_where('kategori', ['idkategori'=>$idkategori])->row_array();
}
public function update_kategori($id, $data){
    $this->db->where('idkategori', $id);
    return $this->db->update('kategori', $data);
}
}