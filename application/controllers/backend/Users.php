<?php

class Users extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('backend/auth/login');
		}
	}
	
    public function index()
    {
        $data['activeUser'] = $this->auth_model->current_user(); //menampilkan level
        $data['users'] = $this->Users_model->get_all(); //menampilkan data

        $this->load->view('backend/list_users', $data);

    }
	//hapus data
	public function delete($id = null)
	{
		$data['activeUser'] = $this->auth_model->current_user(); //menampilkan level
        $this->Users_model->delete($id);
		redirect("backend/Users");
	}
	//simpan data
	public function add()
	{
		$data['activeUser'] = $this->auth_model->current_user(); //menampilkan level
		$user = $this->Users_model;
		$validation = $this->form_validation;
        $validation->set_rules($user->rules());
		if ($validation->run()) {
            $user->save();
			redirect("backend/Users");
		}
		$this->load->view('backend/componens/add_users', $data);
	}
	//edit data
	public function edit($id = null)
	{
		$data['activeUser'] = $this->auth_model->current_user(); //menampilkan level
		$data['users'] = $this->Users_model->find($id);

		if (!$data['users'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			// TODO: lakukan validasi data seblum simpan ke model
			$user = [
				'id_user' => $id,
				'nip' => $this->input->post('nip'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'username' => $this->input->post('username'),
					'level' => $this->input->post('level'),
					'status' => $this->input->post('status')
					
			];
			$updated = $this->Users_model->update($user);
			if ($updated) {
				$this->session->set_flashdata('message', 'User was updated');
				redirect('backend/users');
			}
		}

		$this->load->view('backend/componens/edit_users', $data);
	}

	public function new()
	{
		$data['activeUser'] = $this->auth_model->current_user(); //menampilkan data dari user login
		$data['users'] = $this->Users_model->get_all();
		if ($this->input->method() === 'post') {
				$users = [
					'nip' => $this->input->post('nip'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'username' => $this->input->post('username'),
					'level' => $this->input->post('level'),
					'status' => $this->input->post('status')
				];
				$saved = $this->Users_model->save($users);
 
				if ($saved) {
					$this->session->set_flashdata('message', 'Data berhasil disimpan!');
					return redirect('backend/Users');
				}
		}
		$this->load->view('backend/componens/add_users', $data);
	}
	public function change($id_user = null)
    {
        $data['activeUser'] = $this->auth_model->current_user();
        $data['user'] = $this->Users_model->getById($id_user);
        if ($data['activeUser']->level <> 'Admin' && $data['activeUser']->username <> $data['user']->username) {
            show_404();
        }
        if ($this->input->method() === 'post') {
            $current = $this->input->post('current');
            $verify = $this->Users_model->verify($data['user']->username, $current);
            if (!$verify) {
                $this->session->set_flashdata('message', 'Current password salah!');
            } else {
                $user = [
                    'id_user'   => $id_user,
                    'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                ];
                $update = $this->Users_model->update($user);
                if ($update) {
                    $this->session->set_flashdata('message', 'Password berhasil diubah!');
                    if ($data['activeUser']->username == $data['user']->username) {
                        $this->auth_model->logout();
                        redirect('backend');
                    }
                    redirect('backend/users');
                } else {
                    $this->session->set_flashdata('message', 'Password gagal diubah!');
                }
            }
        }
        $this->load->view('backend/change_password', $data);
    }

    public function block($id_user = null)
    {
        $data['activeUser'] = $this->auth_model->current_user();
        if ($data['activeUser']->level <> 'Admin') {
            show_404();
        }
        $data['user'] = $this->Users_model->getById($id_user);
        if (!$data['user'] || !$id_user) {
            show_404();
        }
        $user = [
            'id_user' => $id_user,
            'status' => 0
        ];
        $update = $this->Users_model->update($user);
        if ($update) {
            $this->session->set_flashdata('message', 'Data berhasil diblokir!');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diblokir!');
        }
        redirect('backend/Users');
    }
    }
