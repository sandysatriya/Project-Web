<?php
class Training extends CI_Controller
{
	
	public function __construct(){

		parent::__construct();
		$this->load->model('Training_model');
	}


	function index()
	{
		$data['sql']=$this->Training_model->getSeminar();
		$data['sql2']=$this->Training_model->getWorkshop();
		$data['sql3']=$this->Training_model->getPelatihan();
		

		$this->load->view('user-public/header');
		$this->load->view('user-public/training_view', $data);
		$this->load->view('user-public/footer');
		$this->load->view('user-public/training_modal', $data);
	}


	function daftar(){
		$this->load->view('user-public/header');
		$this->load->view('user-public/daftar_training_view');
		$this->load->view('user-public/footer');
	}

	function api_training(){
		$id = $this->input->get('id');
		$jenis = $this->input->get('jenis');

		if ($jenis=='Seminar'){
			$data			=$this->Training_model->getModalSeminar($id)->row()->nama_seminar;
			$tentang_acara	=$this->Training_model->getModalSeminar($id)->row()->tentang_acara;
			$tgl_acara		=$this->Training_model->getModalSeminar($id)->row()->tgl_acara;
			$jam_acara		=$this->Training_model->getModalSeminar($id)->row()->jam_acara;
			$tmp_acara		=$this->Training_model->getModalSeminar($id)->row()->tmp_acara;
			$biaya			=$this->Training_model->getModalSeminar($id)->row()->biaya;
			$penyelenggara	=$this->Training_model->getModalSeminar($id)->row()->penyelenggara;
			$speaker		=$this->Training_model->getModalSeminar($id)->row()->speaker;
			$kontak			=$this->Training_model->getModalSeminar($id)->row()->kontak;
			$manfaat		=$this->Training_model->getModalSeminar($id)->row()->manfaat;
			$addinfo		=$this->Training_model->getModalSeminar($id)->row()->add_info;
		} 
		elseif ($jenis=='Workshop') {
			$data			=$this->Training_model->getModalWorkshop($id)->row()->nama_workshop;
			$tentang_acara	=$this->Training_model->getModalWorkshop($id)->row()->tentang_acara;
			$tgl_acara		=$this->Training_model->getModalWorkshop($id)->row()->tgl_acara;
			$jam_acara		=$this->Training_model->getModalWorkshop($id)->row()->jam_acara;
			$tmp_acara		=$this->Training_model->getModalWorkshop($id)->row()->tmp_acara;
			$biaya			=$this->Training_model->getModalWorkshop($id)->row()->biaya;
			$penyelenggara	=$this->Training_model->getModalWorkshop($id)->row()->penyelenggara;
			$speaker		=$this->Training_model->getModalWorkshop($id)->row()->speaker;
			$kontak			=$this->Training_model->getModalWorkshop($id)->row()->kontak;
			$manfaat		=$this->Training_model->getModalWorkshop($id)->row()->manfaat;
			$addinfo		=$this->Training_model->getModalWorkshop($id)->row()->add_info;
		}
		elseif ($jenis=='Pelatihan') {
			$data			=$this->Training_model->getModalPelatihan($id)->row()->nama_pelatihan;
			$tentang_acara	=$this->Training_model->getModalPelatihan($id)->row()->tentang_acara;
			$tgl_acara		=$this->Training_model->getModalPelatihan($id)->row()->tgl_acara;
			$jam_acara		=$this->Training_model->getModalPelatihan($id)->row()->jam_acara;
			$tmp_acara		=$this->Training_model->getModalPelatihan($id)->row()->tmp_acara;
			$biaya			=$this->Training_model->getModalPelatihan($id)->row()->biaya;
			$penyelenggara	=$this->Training_model->getModalPelatihan($id)->row()->penyelenggara;
			$speaker		=$this->Training_model->getModalPelatihan($id)->row()->speaker;
			$kontak			=$this->Training_model->getModalPelatihan($id)->row()->kontak;
			$manfaat		=$this->Training_model->getModalPelatihan($id)->row()->manfaat;
			$addinfo		=$this->Training_model->getModalPelatihan($id)->row()->add_info;
		} 
		
		echo "Nama 			: <br> $data <br> <br>";
		echo "Tentang 		: <br> $tentang_acara <br> <br>";
		echo "Tanggal		: <br> $tgl_acara <br> <br>";
		echo "Jam 			: <br> $jam_acara <br> <br>";
		echo "Tempat 		: <br> $tmp_acara <br> <br>";
		echo "Biaya 		: <br> $biaya <br> <br>";
		echo "Penyelenggara : <br> $penyelenggara <br> <br>";
		echo "Speaker 		: <br> $speaker <br> <br>";
		echo "Kontak 		: <br> $kontak <br> <br>";
		echo "Manfaat 		: <br> $manfaat <br> <br>";
		echo "Add Info 		: <br> $addinfo <br>";
		
	}



}