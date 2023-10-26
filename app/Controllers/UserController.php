<?php

namespace App\Controllers;  

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $user = $this->userModel->getUser();
        $data = [
            'users' => $user,
            'title' => 'List User'
        ];
        return view('list_user', $data);
    }
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm'   => $npm
        ];
        return view('profile', $data);
    }
    
    public function create()
    {

        $kelas = $this->kelasModel->getKelas();
        
        $data= [
            'title' => 'Create User',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];
        
        return view('create_user', $data);
    }
        // $kelas = [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ],
        // ];

        // $data = [
        //     'kelas' => $kelas,
        //     'validation' => \Config\Services::validation()
        // ];
        //  return view('create_user', $data);

    public function show($id){
        $user = $this->userModel->getUser($id);
        $data = [
            'title' => 'Profile',
            'user' => $user
        ];
        return view('profile', $data);
    }
    public function edit($id)
    {
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()

        ];
        return view('edit_user', $data);
    }
    public function update($id){
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $data = [
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;
            }
        }
        $result = $this->userModel->updateUser($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/user'));
    }
    public function store()
    {
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            // 'npm' => [
            //     'rules' => 'required|is_unique[user.npm]',
            //     'errors' => [
            //         'required' => '{field} mahasiswa harus di isi.',
            //         'is_unique' => '{field} mahasiswa sudah terdaftar.'
            //     ]    
            // ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
        }

        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) {
            $foto = base_url($path . $name);
           }


        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);

        $data = [
            'title' => 'profile',
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return redirect()->to('/user');
    }
    public function destroy($id)
    {
        $result = $this->userModel->deleteUser($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/user'))
            ->with('success', 'Berhasil menghapus data!');
    }
}

// $nama = $this->request->getPost('nama');
// $kelas = $this->request->getPost('kelas');
// $npm = $this->request->getPost('npm');
// $alamat = $this->request->getPost('alamat');
// $data=[
//     'nama' => $nama,
//     'kelas' => $kelas,
//     'npm' => $npm,
//     'alamat' => $alamat
// ];
