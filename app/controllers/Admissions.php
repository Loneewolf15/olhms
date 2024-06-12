<?php

class Admissions extends Controller
{
    public function __construct()
    {
        // $this->userModel = $this->model('User');
    }

    public function apply()
    {
        $data = [
            'title' => 'Apply - OLHMS',
        ];
        $this->view('admissions/apply', $data);
    }

    public function curriculum()
    {
        $data = [
            'title' => 'Curriculum - OLHMS',
        ];
        $this->view('admissions/curriculum', $data);
    }

    public function alumni()
    {
        $data = [
            'title' => 'Alumni - OLHMS',
        ];
        $this->view('admissions/alumni', $data);
    }

    public function boarding()
    {
        $data = [
            'title' => 'Boarding - OLHMS',
        ];
        $this->view('admissions/boarding', $data);
    }

    public function scholarshipfees()
    {
        $data = [
            'title' => 'Scholarship Fees - OLHMS',
        ];
        $this->view('admissions/scholarshipfees', $data);
    }

    public function uniform()
    {
        $data = [
            'title' => 'Uniform - OLHMS',
        ];
        $this->view('admissions/uniform', $data);
    }

    public function parents()
    {
        $data = [
            'title' => 'Parents - OLHMS',
        ];
        $this->view('admissions/parents', $data);
    }

    public function parentsfaqs()
    {
        $data = [
            'title' => 'FAQs by Parents - OLHMS',
        ];
        $this->view('admissions/parentsfaqs', $data);
    }
}
