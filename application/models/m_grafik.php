<?php
class M_grafik extends CI_Model{
 
    function get_data_stok(){
        $query = $this->db->query("SELECT seksi,SUM(bidang) AS bidang FROM products GROUP BY seksi");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
 