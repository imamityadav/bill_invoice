<?php
$this->load->view('headercss/'.$headercss);
$this->load->view('base/'.$header);

$this->load->view($contend);

$this->load->view('base/'.$footer);
$this->load->view('footerjs/'.$footerjs);
?>