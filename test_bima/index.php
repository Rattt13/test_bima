<!DOCTYPE html>
<html>
<head>
	<title>Profile Bima</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">BIMA LUKMANTARA</h1>
		<h3 class="deskripsi"><a href="https://wa.me/6285229087207"><img src="img/wa.png" height="25px"> <a href="https://www.instagram.com/b.lukmantara"><img src="img/ig.png" height="25px"></h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a class="klik_menu" id="home">HOME</a></li>
			<li><a class="klik_menu" id="cv">RIWAYAT HIDUP</a></li>
			<li><a class="klik_menu" id="sosmed">SOSIAL MEDIA</a></li>
			<li><a class="klik_menu" id="berita">BERITA</a></li>
		</ul>
	</div>
 
	<div class="badan">
 

 
	</div>
</div>
</body>
 
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('home.php');						
			}else if(menu == "cv"){
				$('.badan').load('bima.php');						
			}else if(menu == "sosmed"){
				$('.badan').load('sosmed.php');						
			}else if(menu == "berita"){
				$('.badan').load('berita.php');
			}
		});
 
 
		$('.badan').load('home.php');						
 
	});
</script>
 
</html>