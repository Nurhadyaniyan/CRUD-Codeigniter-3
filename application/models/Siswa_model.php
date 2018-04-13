<?php
class Siswa_model extends CI_Model {

  public function ambil_data()
  {
    return $this->db->get('siswa')->result();
  }

  public function insert($data)
  {
    $this->db->insert('siswa',$data);
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('siswa')->row();
  }

  public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('siswa', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('siswa');
  }
}

 ?>
