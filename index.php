<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('location: login.php');
}else{?>
<?php include 'header.php'; ?>

	<div class="content">
		<?php if (isset($_SESSION['username'])): ?>
				<h1>Anda Telah Berhasil Login</h1>
		<?php endif ?>
	</div>

<?php include 'footer.php'; ?>
<?php } ?>