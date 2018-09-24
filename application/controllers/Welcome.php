<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	 function __construct()
 {
   parent::__construct();
  
   $this->load->model('mod','',TRUE);
 }
	public function index()
	{
		$this->load->view('index.php');
		
	}
	public function admin()
	{
		$this->load->view('login');
			}
	public function reg()
	{

	$this->load->view('register');
		$data['records']=$this->mod->catsel();
	}
	public function Register()
	{
 $a=$this->input->post('first_name');

$b=$this->input->post('last_name');
$c=$this->input->post('hname');
$d=$this->input->post('place');
$e=$this->input->post('number');
$f=$this->input->post('email');
$g=$this->input->post('catid');
$h=$this->input->post('distid');
$i=$this->input->post('user_name');
$j=$this->input->post('user_password');


$this->load->model('mod');
$s=array('name'=>$a,'hname'=>$b,'place'=>$c,'pin'=>$d,'number'=>$e,'mail'=>$f,'catid'=>$g,'distid'=>$h);

$id=$this->mod->addreg($s);
$log = array('uid' => $id,'username'=>$i,'password'=>$j,'role'=>0);
$this->mod->addlog($log);
	}
	public function login()
	{
		$a=$this->input->post('user_name');
		$b=$this->input->post('user_password');
			

 $this->load->model('mod');
 $res=$this->mod->logchk($a,$b);
    if(!$res)
	{
          ?>	<script>
          	alert('Login Not Sucessfull........');
       	window.location= "login";         	</script>
      <?php  }
        else
        {
        //redirect(base_url('welcome_message')); 
         $this->load->view('welcome_message'); 	
     }
	
	}
	public function category()
	{
	$cat=$this->input->post('category');
$a = array('catname' => $cat );
	 $this->load->model('mod');
	$this->mod->addcat($a);
	        $this->load->view('welcome_message');
	}
}
