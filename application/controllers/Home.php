<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->load->model('Home_model','model');
	}
	
	public function index()
	{
		$data['whats_new_list']=$this->model->whatsNewList();
		$this->load->view('home/header');
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	}
	public function about()
	{
		$data['content']=$this->model->finder('introduction',1);
		$this->load->view('home/header');
		$this->load->view('home/about',$data);
		$this->load->view('home/footer');
	}
	public function services()
	{
		$this->load->view('home/header');
		$this->load->view('home/services');
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function project()
	{
		$this->load->view('home/header');
		$this->load->view('home/project');
		$this->load->view('home/footer');
	}
	public function formHandler()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		if($this->form_validation->run()):
			$data=$this->input->post();
			if($this->model->addEnquiry($data)):
				$this->session->set_flashdata('msg', "Thank You for contacting with us. Our team will contact you soon.");
  				return redirect(base_url().'home/contact');
			else:

				$this->session->set_flashdata('msg', "Something went wrong");
  				return redirect(base_url().'home/contact');
			endif;
		else:
			$this->contact();
		endif;
	}
	public function terms_condition()
	{
		$this->load->view('home/header');
		$this->load->view('home/terms_condition');
		$this->load->view('home/footer');
	}
	public function privacy_policy()
	{
		$this->load->view('home/header');
		$this->load->view('home/privacy_policy');
		$this->load->view('home/footer');
	}
	public function objective()
	{
		$data['content']=$this->model->finder('objective',1);
		$this->load->view('home/header');
		$this->load->view('home/objective',$data);
		$this->load->view('home/footer');
	}
	public function research_development()
	{
		$this->load->view('home/header');
		$this->load->view('home/research_development');
		$this->load->view('home/footer');
	}
	public function vision_mission()
	{
		$data['content']=$this->model->finder('vision_mission',1);
		$this->load->view('home/header');
		$this->load->view('home/vision_mission',$data);
		$this->load->view('home/footer');
	}
	public function board_of_directors()
	{
		$this->load->view('home/header');
		$this->load->view('home/board_of_directors');
		$this->load->view('home/footer');
	}
	public function organizational_structure()
	{
		$this->load->view('home/header');
		$this->load->view('home/organizational_structure');
		$this->load->view('home/footer');
	}
	public function senior_executive()
	{
		$this->load->view('home/header');
		$this->load->view('home/senior_executive');
		$this->load->view('home/footer');
	}
	public function code_of_conduct()
	{
		$this->load->view('home/header');
		$this->load->view('home/code_of_conduct');
		$this->load->view('home/footer');
	}
	public function csr()
	{
		$this->load->view('home/header');
		$this->load->view('home/csr');
		$this->load->view('home/footer');
	}
	public function committees_of_the_board()
	{
		$this->load->view('home/header');
		$this->load->view('home/committees_of_the_board');
		$this->load->view('home/footer');
	}
	public function career()
	{
		$this->load->view('home/header');
		$this->load->view('home/career');
		$this->load->view('home/footer');
	}
	public function solar_photovoltaic()
	{
		$this->load->view('home/header');
		$this->load->view('home/solar_photovoltaic');
		$this->load->view('home/footer');
	}
	//
	public function solar_thermal()
	{
		$this->load->view('home/header');
		$this->load->view('home/solar_thermal');
		$this->load->view('home/footer');
	}
	public function solarization_of_ports()
	{
		$this->load->view('home/header');
		$this->load->view('home/solarization_of_ports');
		$this->load->view('home/footer');
	}
	public function consultancy_services()
	{
		$this->load->view('home/header');
		$this->load->view('home/consultancy_services');
		$this->load->view('home/footer');
	}
	public function r_and_d()
	{
		$this->load->view('home/header');
		$this->load->view('home/r_and_d');
		$this->load->view('home/footer');
	}
	public function solar_park()
	{
		$this->load->view('home/header');
		$this->load->view('home/solar_park');
		$this->load->view('home/footer');
	}
	public function whats_new_list()
	{
		$data['whats_new_list']=$this->model->whatsNewList();
		$this->load->view('home/header');
		$this->load->view('home/whats_new_list',$data);
		$this->load->view('home/footer');
	}
	public function whats_new_info($id)	
	{
		$data['whats_new_list']=$this->model->whatsNewList($id);
		$this->load->view('home/header');
		$this->load->view('home/whats_new_info',$data);
		$this->load->view('home/footer');
	}
}
