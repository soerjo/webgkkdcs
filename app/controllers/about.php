<?php
class About extends Controller
{
    public function index()
    {
        $data = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function panggil($nama = 'Suryo', $umur = 23, $pekerjaan = 'Dosen')
    {
        $params['nama'] = $nama;
        $params['umur'] = $umur;
        $params['pekerjaan'] = $pekerjaan;

        $data = 'Panggil';
        $this->view('templates/header', $data);
        $this->view('about/panggil', $params);
        $this->view('templates/footer');
    }
}
