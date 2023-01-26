<div class="halaman">
	<p align="left"><a class="klik_menu" id="news1">Cetak Atlet Berkelas Nasional dan Internasional, Perguruan Tapak Suci Wonosobo Gelar Kejuaraan Pencak Silat Piala Bupati I</a></p>
	<p align="left"><a class="klik_menu" id="news2">PPID Pelaksana Wonosobo Diminta Bantu Pertahankan Predikat Keterbukaan Informasi : Informatif</a></p>
	<p align="left"><a class="klik_menu" id="news3">Bawa Aspirasi, 850 Perangkat Desa Bertolak ke Jakarta</a></p>
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "news1"){
				$('.badan').load('news1.php');					
			}else if(menu == "news2"){
				$('.badan').load('news2.php');						
			}else if(menu == "news3"){
				$('.badan').load('news3.php');						
			}
		});					
 
	});
</script>
	
</div>