<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main_model extends Model {
    public function getInfo()
    {
        return $this->db->table('tblla')->get_all();
    }
    public function searchInfo($id)
    {
        return $this->db->table('tblla')->where('id',$id)->get();
    }
}
?>