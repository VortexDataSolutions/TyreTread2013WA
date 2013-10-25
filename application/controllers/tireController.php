<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TireController extends CI_Controller {

    public function tire() {
        
        $this->load->model('TireModel');
        
        $data['records'] = $this->TireModel->getProduct();
        
        $this->load->view('tire', $data);
        
    }
}