<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainController extends Controller {
    
    public function home(){
        $this->call->model('Main_model');
        $data['info'] = $this->Main_model->getInfo();
        $this->call->view('home',$data);
    }
    public function add(){
        $studentID = $this->io->post('studentID');
        $FullName = $this->io->post('FullName');
        $YearLevel = $this->io->post('YearLevel');
        $Course = $this->io->post('Course');
        $bind = array(
            "studentID" => $studentID,
            "FullName" => $FullName,
            "YearLevel" => $YearLevel,
            "Course" => $Course,
        );
        $this->db->table('tblla')->insert($bind);
        redirect ('/home');
    }
    public function delete($id)
    {
        if(isset($id)){
            $this->db->table('tblla')->where("id", $id)->delete();
            redirect('/home');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            redirect('/home');
        }
        
    }
    public function edit($id)
    {
        $this->call->model('Main_model');
        $data['info'] = $this->Main_model->getInfo();
        $data['edit'] = $this->Main_model->searchInfo($id);
        $this->call->view('home', $data);
    }
    public function submitedit($id)
    {
        if(isset($id))
        {
        $studentID = $this->io->post('studentID');
        $FullName = $this->io->post('FullName');
        $YearLevel = $this->io->post('YearLevel');
        $Course = $this->io->post('Course');
        $data = [
            "studentID" => $studentID,
            "FullName" => $FullName,
            "YearLevel" => $YearLevel,
            "Course" => $Course,
        ];
        $this->db->table('tblla')->where("id", $id)->update($data);
        redirect('/home');    
        }
        
    }
}
?>