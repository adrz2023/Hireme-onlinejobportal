<?php
include('C:\xampp\htdocs\job\connection\db.php');

function redirect($path)
{
?>
	<script>
		window.location.href = '<?php echo $path; ?>';
	</script>
<?php
}
?>