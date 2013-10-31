<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SummaryController extends CI_Controller {

    public function summary() {
        
        $this->load->model('SummaryModel');
        
        $data['records'] = $this->SummaryModel->getProduct();
        
        $this->load->view('summary', $data);
        
    }
}