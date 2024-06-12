<?php

class News extends Controller
{
    public function __construct()
    {
        // $this->userModel = $this->model('User');
    }
    
    public function newx(){
        $data = [
            'title' => 'News - OLHMS',
        ];
        $this->view('news/newx', $data);
    }


    public function newsletter()
    {
        $data = [
            'title' => 'News - OLHMS',
        ];
        $this->view('news/newsletter', $data);
    }

    public function calendar()
    {
        $data = [
            'title' => 'Academic - Calendar',
        ];
        $this->view('news/calendar', $data);
    }

    public function events()
    {
        $data = [
            'title' => 'Events - OLHMS',
        ];
        $this->view('news/events', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog - OLHMS',
        ];
        $this->view('news/blog', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery - OLHMS',
        ];
        $this->view('news/gallery', $data);
    }
    
    public function downloads()
    {
        $data = [
            'title' => 'Downloads - OLHMS',
        ];
        $this->view('news/downloads', $data);
    }
}
