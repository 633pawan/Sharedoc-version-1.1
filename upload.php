<?php require_once 'config.php';?>
	<div >
		<div class="form-container">
			<form enctype="multipart/form-data" name='imageform' role="form" id="imageform" method="post" action="ajax.php">
				<div class="form-group">
					<p>Please Choose a file to upload: </p>
					<input class='file' type="file" class="form-control" name="files" id="files" placeholder="Please choose your file">
					<br><span class="help-block"></span>
				</div>
				
				<div id="loader" style="display: none;">
					Please wait file uploading to server....
				</div>
					Document name:<br>
					<input type="text" name="documentName">
					<br>
					Document Description name:<br>
					<textarea  name="description"></textArea><br>
				<input type="submit" value="Upload" name="uploadBtn" id="uploadBtn" class="btn"/>
			</form>
		</div>
			
		<div class="clearfix"></div>
		<br><div id="uploaded_files" class="uploaded-files">
			<div id="error_div" style="align:center;font-family:arial;background-color:red;font-size:20px;hight:10%;width:20%;">
			</div>
			<div id="success_div" style="align:center;font-family:arial;background-color:lightgreen;font-size:20px;hight:10%;width:20%;">
			</div>
		</div>
	
	</div>
	<input type="hidden" id='base_path' value="<?php echo BASE_PATH; ?>">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script src="js/script.js"></script>
<script type="text/javascript">
var jQuery_min = $.noConflict(true);
</script>
	