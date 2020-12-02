
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
	//Load trang header
	$this->load->view('layout/header');
?> 
	<div class="container" style="margin-top:30px">
		<div class="row">
			<?php 
				//Load trang sidebar
				$this->load->view('layout/sidebar');
			?>
			<?php
			//Load trang main
				$this->load->view('layout/simplexmlload');
			?> 
		</div>
	</div>
<?php
	//Load trang footer
	$this->load->view('layout/footer');
?> 
