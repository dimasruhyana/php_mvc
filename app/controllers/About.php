<?php

class About extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = 'Dimas Ruhyana';
        $data['pekerjaan'] = 'pelajar';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page()
    {
        $data['judul'] = 'Halaman Page';
        $data['nama'] = 'Dimskiw';
        $data['role'] = 'Assasin , Mage';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}
