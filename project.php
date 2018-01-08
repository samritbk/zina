<?php
	include("connection.php");


	function getProject($project_id){
		$return=array();
		$query=mysql_query("SELECT * FROM projects WHERE project_id=$project_id");
		$num_query=mysql_num_rows($query);

			$row=mysql_fetch_assoc($query);

			$return['id']=$row['project_id'];
			$return['name']=$row['project_name'];
			$return['short_desc']=$row['project_short_desc'];
			$return['desc']=$row['project_desc'];
			$return['languages']=$row['project_languages'];

			$projectImgs=explode(",",$row['project_img']);
			$return['project_img']=$projectImgs[0];
			$arrayImgs=array();

			for($i=1; $i < (count($projectImgs)); $i++){
					$arrayImgs[]=$projectImgs[$i];
			}

			$return['images']=$arrayImgs;

		return $return;
	}

	function getProjects($project_id){
		$return=array();
		$query=mysql_query("SELECT * FROM projects WHERE project_id=$project_id");
		$num_query=mysql_num_rows($query);

			$row=mysql_fetch_assoc($query);

			$return['id']=$row['project_id'];
			$return['name']=$row['project_name'];
			$return['short_desc']=$row['project_short_desc'];
			$return['desc']=$row['project_desc'];
			$return['languages']=$row['project_languages'];

			$projectImgs=explode(",",$row['project_img']);
			$return['project_img']=$projectImgs[0];
			$arrayImgs=array();

			for($i=1; $i < (count($projectImgs)); $i++){
					$arrayImgs[]=$projectImgs[$i];
			}

			$return['images']=$arrayImgs;

		return $return;
	}


?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/linkstyles.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<link href="css/lightbox.css" rel="stylesheet">
<script src="js/lightbox.js"></script>
<title>Projects | Zina Labs</title>
</head>
<body>
		<?php //include("header.php"); ?>

		<div class="stylishHeader" style="background:linear-gradient(140deg,rgba(24,46,74,.85),rgba(70,174,195,.65)),url(images/fileuploader.png) center fixed; background-size:cover;">
			<div style="width:85%; color:#FFF; margin:auto; overflow:auto;">
				<a href="projects.php">
					<div class="backToProjects">
						< Back to projects
					</div>
				</a>
				<div class="projectTopic">
					<?php
						$project=getProject(1);
						echo $project['name'];
					?>
				</div>
				<div class="projectDesc">
					A personal cloud file storage
				</div>
			</div>
		</div>

    <div class="content" style="margin-top:0px; top:0; position:relative;">
    <div class="content-body">
			<div class="margined-wrapper">
				<div style="margin-top:15px;">
					<?php
						$languages=explode(',',$project['languages']);
						for($i=0; $i < count($languages); $i++){
						?>
						<span class="languagesSpan"><?php echo $languages[$i]; ?></span>
					<?php
						}
					?>
				</div>
				<?php echo $project['desc']; ?>
				<h1>Screenshots</h1>
				<div>
					<?php

						$images=$project['images'];
						//print_r($images);
						for($i=0; $i < count($images); $i++){
							?>
							<a href="images/portfolio/<?php echo $images[$i]; ?>" data-lightbox="<?php echo $project['name']; ?>" data-title="<?php echo $project['name']; ?>">
								<div class="screenshotFloats" style="background:url(images/portfolio/<?php echo $images[$i]; ?>) top center;"></div>
							</a>
							<?php
						}
					?>
					<div class="clear"></div>
				</div>
    </div>
		<div class="main-quote">
			<blockquote><span style="font-size:30px;">"</span>I can't sleep, I have great dreams to chase<span style="font-size:30px;">"</span></blockquote>
		</div>
				<?php include("contact-section.php"); ?>
		  <?php include("footer.php"); ?>
    </div>
</body>
</html>
