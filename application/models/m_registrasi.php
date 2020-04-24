<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_registrasi extends CI_Model
{

    function tampil_data(){
        return $this->db->get('antrean');
    }

    function get_rs(){
        $query = $this->db->get('rumah_sakit');
        return $query;  
    }

    function get_poli(){
        $query = $this->db->get('poli');
        return $query;
    }
 
    function get_sub_rs($id_rs){
        $query = $this->db->get_where('rumah_sakit', array('id_rs' => $id_rs));
        return $query;
    }

    function get_sub_poli($id_poli){
        $query = $this->db->get_where('poli', array('id_poli' => $id_poli));
        return $query;
    }

    function save_antrean($nama_lengkap,$nama_rs,$poli,$no_antrean){
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'nama_rs' => $nama_rs,
            'poli' => $poli,
            'no_antrean' => $no_antrean
        );
        $this->db->insert('antrean',$data);
    }

    /*
    private $_table = "antrean";

    public $id_rs;
    public $id_poli;
    public $id_user;
    public $no_antrean;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_rs" => $id])->row();
    }

    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rs = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
    
    // get data dropdown
    function dd_rumahsakit()
    {
        // ambil data dari db
        $this->db->order_by('rumah_sakit', 'asc');
        $result = $this->db->get('nama_rs');
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id_rs] = $row->nama_rs;
            }
        }
        return $dd;
    }*/

}