<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tags;

class PracticeController extends Controller
{
    protected $helpers = ['url','form', 'text', 'html'];
    public function index()
    {
        return view('sample');
    }
    public function view(){
        $tags = new Tags();
        $query['tags'] = $tags->findAll();
        //dd($query['tags']);
        return view('tags', $query);
    }
    public function insertTag(){
        
        $tagsModel = new Tags();
        $datas = array(
            'name'=>$this->request->getPost('tag')
        );
        $query = $tagsModel->insert($datas);
        if($query){
           return redirect()->to('/practice')->with("Message", "Data successfully added.");
        }
    }
}