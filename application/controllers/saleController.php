<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SaleController extends CI_Controller {

    public function index() {
        $this->load->view('sale');
    }
}