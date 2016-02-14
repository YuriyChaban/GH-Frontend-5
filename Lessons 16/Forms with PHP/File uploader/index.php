<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP File Uploader</title>
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">PHP File .jpeg only Uploader</a>
        </div>
      </div>
    </div>
    <div class="container">
    	<div class="row">
	       <?php 
		       $folder = "uploads";
		       $results = scandir('uploads');
		       foreach ($results as $result) {
			       	
			       	if ($result === '.' or $result === '..') continue;
			       	
			       	if (is_file($folder . '/' . $result)) {
			       		echo '
			       		<div class="col-md-3">
				       		<div class="thumbnail">
					       		<img src="'.$folder . '/' . $result.'" alt="...">
						       		<div class="caption">
						       		<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
					       		</div>
				       		</div>
			       		</div>';
			       	}
		       }
	       ?>
    	</div>
		<div class="row">
			<div class="col-lg-12">
				<form class="well" action="upload.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="file">Select a file to upload</label>
						<input type="file" name="file" id="file">
						<p class="help-block">Only jpg and jpeg file with maximum size of 1 MB is allowed.</p>
					</div>
					<input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
		</div>
    </div>
  </body>
</html>