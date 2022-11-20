<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $barangModel = new \App\Models\BarangModel();
        $allBarang = $barangModel->findAll();

        return view('barang/index', [
            'allBarang' => $allBarang,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $barangModel = new \App\Models\BarangModel();

        $barang = $barangModel->find($id);

        return view('barang/view.php', [
            'barang' => $barang,
        ]);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah data barang'
        ];

        // Jika ada data yang dikirim melalui form
        if ($this->request->getPost()) {

            $data1 = $this->request->getPost();
            $this->validation->run($data1, 'barang');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                $barangModel = new \App\Models\BarangModel();
                $barang = new \App\Entities\Barang();

                $barang->fill($data1);
                $barang->gambar = $this->request->getFile('gambar');
                $barang->created_by = $this->session->get('id');
                $barang->created_date = date('Y-m-d H:1:s');

                $barangModel->save($barang);

                $id = $barangModel->insertID();

                $segments = ['barang', 'view', $id];

                // Redirect ke halaman detail barang
                return redirect()->to(site_url($segments));
            }
        }

        return view('barang/tambah', $data);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $barangModel = new \App\Models\BarangModel();

        $barang = $barangModel->find($id);

        if ($this->request->getPost()) {

            $data = $this->request->getPost();
            $this->validation->run($data, 'barangupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                $br = new \App\Entities\Barang();
                $br->id = $id;
                $br->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {

                    $br->gambar = $this->request->getFile('gambar');
                }

                $br->updated_by = $this->session->get('id');
                $br->updated_date = date("Y-m-d H:i:s");

                $barangModel->save($br);

                $segments = ['barang', 'view', $id];

                return redirect()->to(site_url($segments));
            }
        }

        return view('barang/update', [
            'barang' => $barang
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $barangModel = new \App\Models\BarangModel();
        $barangModel->delete($id);

        return redirect()->to(site_url('barang/index'));
    }
}
