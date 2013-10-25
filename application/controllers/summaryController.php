<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SummaryController extends CI_Controller {

    public function summary() {
        $this->load->view('summary');
    }
}