<?php
class Logincompany extends CI_Controller
{

    public function index()
    {
		// get form input
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean|md5");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('log-reg/header');
			$this->load->view('log-reg/login_company_view');
			$this->load->view('log-reg/footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->User_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array(
					'login' => TRUE, 
					'uname' => $uresult[0]->fname,
					'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
				redirect("profilecompany");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('logincompany');
			}
		}
    }
}
