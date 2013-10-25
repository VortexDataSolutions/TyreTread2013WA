<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OtherController extends CI_Controller {

    public function other() {
        $this->load->view('other');
    }
}