<?php

class Abouts extends Controller
{
    public function __construct()
    {
        // $this->userModel = $this->model('User');
    }

    public function foundersmessage()
    {
        $data = [
            'title' => 'News - OLHMS',
        ];
        $this->view('abouts/foundersmessage', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'Admissions - OLHMS',
        ];
        $this->view('abouts/aboutus', $data);
    }

    public function ourhistory()
    {
        $data = [
            'title' => 'History - OLHMS',
        ];
        $this->view('abouts/ourhistory', $data);
    }

    public function principalswelcome()
    {
        $data = [
            'title' => 'Admissions - OLHMS',
        ];
        $this->view('abouts/principalswelcome', $data);
    }

    public function management()
    {
        $data = [
            'title' => 'News - OLHMS',
        ];
        $this->view('abouts/management', $data);
    }

    public function ourpolicies()
    {
        $data = [
            'title' => 'Admissions - OLHMS',
        ];
        $this->view('abouts/ourpolicies', $data);
    }

    public function careers()
    {
        $data = [
            'title' => 'News - OLHMS',
        ];
        $this->view('abouts/careers', $data);
    }
}
