<?php

class Extcurriculars extends Controller
{
    public function __construct()
    {
       // $this->userModel = $this->model('User');
    }

    public function cocurricular()
    {
        $data = [
            'title' => 'Curricular - Activities',
        ];
        $this->view('extcurriculars/cocurricular', $data);
    }
}
