<?php
class Data extends Controller
{
    public function index()
    {
        $data = 'Data';
        $this->view('templates/header', $data);
        $this->view('data/index');
        $this->view('templates/footer');
    }
}
