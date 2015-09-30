<?php
$this->load->view('includes/header_open');
$this->load->view('includes/menu_top.php');


$this->load->view($main_content);

$this->load->view('includes/footer.php');
$this->load->view('includes/header_close');
?>
