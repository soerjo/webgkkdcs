<?php
class About extends Controller
{
    public function index()
    {
        $this->view("about/index");
    }

    public function panggil($nama = 'Suryo', $pekerjaan = 'Dosen', $umur = 23)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $this->view('about/panggil', $data);
    }
}
