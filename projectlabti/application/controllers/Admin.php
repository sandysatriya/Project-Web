<?php
class Admin extends CI_Controller{


public function __construct()
  {
    parent::__construct();
    $this->load->model('m_food','food');

    if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
  }
}

  public function index()
  {
    $this->load->helper('url');

    $this->load->view('admin/v-admin');
  }

  public function ajax_list()
  {
    $this->load->helper('url');
    $list = $this->food->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $food) {
      $no++;
      $row = array();
      $row[] = $food->name_food;
      $row[] = $food->detail;
      $row[] = $food->range_h;
      $row[] = $food->rating;
      $row[] = $food->bahan;
      $row[] = $food->c_buat;
      if($food->pic_food)
        $row[] = '<a href="'.base_url('upload/'.$food->pic_food).'" target="_blank"><img src="'.base_url('upload/'.$food->pic_food).'" class="img-foodponsive"  height="75" /></a>';
      else
        $row[] = '(No photo)';

      //add html for action
      $row[] = '
      <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_food('."'".$food->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
      <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_food('."'".$food->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->food->count_all(),
            "recordsFiltered" => $this->food->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
  }

  public function ajax_edit($id)
  {
    $data = $this->food->get_by_id($id);
    echo json_encode($data);
  }

  public function ajax_add()
  {
    $this->_validate();
    
    $data = array(
        'name_food' => $this->input->post('name_food'),
        'detail' => $this->input->post('detail'),
        'range_h' => $this->input->post('range_h'),
        'rating' => $this->input->post('rating'),
        'bahan' => $this->input->post('bahan'),
        'c_buat' => $this->input->post('c_buat'),
      );

    if(!empty($_FILES['pic_food']['name']))
    {
      $upload = $this->_do_upload();
      $data['pic_food'] = $upload;
    }

    $insert = $this->food->save($data);
    echo json_encode(array("status" => TRUE));
  }

  public function ajax_update()
  {
    $this->_validate();
    $data = array(
        'name_food' => $this->input->post('name_food'),
        'detail' => $this->input->post('detail'),
        'range_h' => $this->input->post('range_h'),
        'rating' => $this->input->post('rating'),
        'bahan' => $this->input->post('bahan'),
        'c_buat' => $this->input->post('c_buat'),
      );

    if($this->input->post('remove_photo')) // if remove photo checked
    {
      if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
        unlink('upload/'.$this->input->post('remove_photo'));
      $data['pic_food'] = '';
    }

    if(!empty($_FILES['pic_food']['name']))
    {
      $upload = $this->_do_upload();
      
      //delete file
      $food = $this->food->get_by_id($this->input->post('id'));
      if(file_exists('upload/'.$food->pic_food) && $food->pic_food)
        unlink('upload/'.$food->pic_food);

      $data['pic_food'] = $upload;
    }

    $this->food->update(array('id' => $this->input->post('id')), $data);
    echo json_encode(array("status" => TRUE));
  }

  public function ajax_delete($id)
  {
    //delete file
    $food = $this->food->get_by_id($id);
    if(file_exists('upload/'.$food->pic_food) && $food->pic_food)
      unlink('upload/'.$food->pic_food);
    
    $this->food->delete_by_id($id);
    echo json_encode(array("status" => TRUE));
  }

  private function _do_upload()
  {
    $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000; //set max size allowed in Kilobyte
        $config['max_width']            = 4000; // set max width image allowed
        $config['max_height']           = 4000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('pic_food')) //upload and validate
        {
            $data['inputerror'][] = 'pic_food';
      $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
      $data['status'] = FALSE;
      echo json_encode($data);
      exit();
    }
    return $this->upload->data('file_name');
  }

  private function _validate()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;

    if($this->input->post('name_food') == '')
    {
      $data['inputerror'][] = 'name_food';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($this->input->post('detail') == '')
    {
      $data['inputerror'][] = 'detail';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($this->input->post('range_h') == '')
    {
      $data['inputerror'][] = 'range_h';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($this->input->post('rating') == '')
    {
      $data['inputerror'][] = 'rating';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($this->input->post('bahan') == '')
    {
      $data['inputerror'][] = 'bahan';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($this->input->post('c_buat') == '')
    {
      $data['inputerror'][] = 'c_buat';
      $data['error_string'][] = 'This Field is required';
      $data['status'] = FALSE;
    }

    if($data['status'] === FALSE)
    {
      echo json_encode($data);
      exit();
    }
  }
}
?>