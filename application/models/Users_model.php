<?php
defined('BASEPATH') or exit ('no direct script acces allowed');
class Users_model extends CI_Model
{
    private $_table = 'users';
    public function rules()
    {
        return [
            [
                'field' => 'nip',
                'label' => 'nip',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'no_hp',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'trim|required'
            ],
        ];
    }
    public function get_all() //Menampilkan list semua data users
    {
        $query = $this ->db->get_where($this->_table); //data diambil dari table users
        return $query->result();
    }
    //hapus data
        public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from tb_barang where id_barang='$id'
    }
    //simpan data
    public function save(){
        {
            $data = array(
                "nip" => $this->input->post('nip'),
                "nama" => $this->input->post('nama'),
                "email" => $this->input->post('email'),
                "no_hp" => $this->input->post('no_hp'),
                "password" => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                "level" => $this->input->post('level'),
                "status" => $this->input->post('status')
            );
            return $this->db->insert($this->_table, $data);
        }
    }

    public function find($id_user)
	{
		if (!$id_user) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id_user' => $id_user));
		return $query->row();
	}

    public function update($user)
	{
		if (!isset($user['id_user'])) {
			return;
		}

		return $this->db->update($this->_table, $user, ['id_user' => $user['id_user']]);
	}
    function update_admin($where, $data)
    {
        $this->db->update('users', $data, $where);
        return $this->db->affected_rows();
    }
    public function verify($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->_table);
        $user = $query->row();
        if (!password_verify($password, $user->password)) {
            return FALSE;
        }
        return true;
    }
    
  
}