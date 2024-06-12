<?php

class Contacts extends Controller
{
    public function __construct()
    {
       // $this->userModel = $this->model('User');
    }

    public function contact()
    {
        $data = [
            'title' => 'ContactUs - OLHMS',
        ];
        $this->view('contacts/contact', $data);
    }

}
