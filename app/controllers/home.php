<?php
class Home extends Controller
{
    public function index()
    {
        $data = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function page()
    {
        $data = 'Page';
        $this->view('templates/header', $data);
        $this->view("home/page");
        $this->view('templates/footer');
    }
}
