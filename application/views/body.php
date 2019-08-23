<?php
$this->load->view('headercss/'.$headercss);
$this->load->view('base/topbar');
$this->load->view('base/menu');
// $this->load->view('base/slideright');

$this->load->view('pages/'.$contend);

$this->load->view('base/footer');
// $this->load->view('base/slidedown');
$this->load->view('footerjs/'.$footerjs);
?>