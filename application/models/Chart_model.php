<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Chart_model extends CI_Model	{


	public function get_data_stok(){
        $query = $this->db->query("SELECT merk,SUM(stok) AS stok FROM table_barang GROUP BY merk");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}