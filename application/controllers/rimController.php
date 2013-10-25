<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class RimController extends CI_Controller {

    public function rim() {
        $this->load->view('rim');
    }
}