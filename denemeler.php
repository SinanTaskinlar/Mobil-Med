<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="kutuphane.css"/>
	<meta charset="UTF-8"/>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<title>Test</title>
</head>
<body>
<?php
	$dizge = 'd';
	$sifrelidizge = base64_encode($dizge);
	echo $sifrelidizge;
	echo "<br>";
	echo base64_decode($sifrelidizge);
?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mobil Med</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="kutuphane.css"/>
</head>
<body>
	<!--
	Arıza anında değiştirilebilecekler: fixed row kaldırılacak, sidebar contente dahil edilecek ve col-md-3 kenarlığı
	kaldırılacak. Footer'ın style'ı kaldırılacak.
	-->
	<!--Header-->
	<div class="row header">
		<div class="col-md-12 headercol">
			<img src="imgs/mobilmedlogo2.png"/>
			<div class="hcikis"><a href="#">Çıkış Yap</a></div>
		</div>
	</div>
	<!--Header-->
	<!--middle-->
	<!--sidebar-->
	<div class="row d-none d-md-block" style="position:fixed; z-index:5; max-width:100%;">
		<div class="col-md-3 shadow p-3 mb-5 bg-white rounded" style="position:fixed; height:100%">
			<ul class="bilgiler">
	            <li id="custom-search-input" style="margin-top:15px; margin-bottom:25px;">
	                <div class="input-group col-md-12">
	                    <input type="text" class="form-control input-lg" placeholder="Ara.." />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button">
	                            <i class="fa fa-search"></i>
	                        </button>
	                    </span>
	                </div>
	            </li>
	            <li class="ilkcizgi"></li>
	            <li class="kisibilgileri">
	            	<div class="kbsaga">></div>
	            	<div class="kbisimsoyisim">İsim Soyisim</div>
	            	<div class="kbemail">email@mail.com</div>
	            </li>
   			</ul>
		</div>
	</div>
	<!--sidebar-->
	<div class="row">
		<div class="col-md-3"></div>
		<!--icerik-->
		<div class="col-md-9" style="padding:0px; margin:0px;">
			<!--üst bilgiler-->
			<div class="row" style="padding:10px">
				<div class="col-md-12">
					<div class="sagust float-left">
						<span style="font-weight:bold">EKG-00</span><br>
						<span>01.01.2018</span>
						<span>00:00</span>
					</div>
					<div class="solust float-right" style="margin-top:6px">
						<button class="button">Paylaş</button>
						<button class="buttondel"><div class="fa fa-trash fa-xm"><span style="font-weight:normal; font-size:normal"> Sil</span></button>
						<button class="button"> < > </button>
					</div>
				</div>
			</div>
			<!--üst bilgiler-->
			<!--orta resim alanı-->
			<div class="row">
				<div class="col-md-12 ortaresim">
					orta resim
				</div>
			</div>
			<!--orta resim alanı-->
			<!--alt bilgiler-->
			<div class="row altbilgiler" style="margin-top:25px">
				<div class="col-md-3">
					Ortalama Nabız<br>
					00
				</div>
				<div class="col-md-3">
					Ortalama RR Mesafesi<br>
					00
				</div>
				<div class="col-md-3">
					Tahmini Teşhis<br>
					Teşhis
				</div>
				<div class="col-md-3">
					<button class="button2"> << </button>
					<button class="button2"> >> </button>
				</div>
			</div>
			<!--alt bilgiler-->
			<!--Doktor bilgileri-->
			<div class="row" style="margin-top:15px;">
				<div class="col-md-5 border-top border-right" style="padding:15px 25px">
					<span  style="font-size:20px;">Doktor Paneli</span>
					<span style="float:right; margin-right:0px; margin-top:3px"><a href="#" data-toggle="modal" data-target="#dpModal" style="color:black; text-decoration:none;">Düzenle</a></span><br>
					<ul style="list-style:none; font-weight:bold; float:left">
						<li>Cinsiyet:</li>
						<li>Yaş:</li>
						<li>Boy:</li>
						<li>Ağırlık:</li>
						<li>Bilgi1:</li>
						<li>Bilgi2:</li>
					</ul>
					<ul style="list-style:none; margin-left:90px">
						<li>E/K</li>
						<li>00</li>
						<li>00</li>
						<li>00</li>
						<li>Bilgi1</li>
						<li>Bilgi2</li>
					</ul>	
				</div>

				<div class="col-md-7 border-top" style="padding:15px 25px">
					<span  style="font-size:20px">Doktor Yorumu</span>

					<span style="float:right; margin-right:0px; margin-top:3px">
						<a href="#" data-toggle="modal" data-target="#dyModal" style="color:black; text-decoration:none">Düzenle</a>
					</span><br>

					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat.ASLDKASLDKLŞASKDLASKDLASKDLKASLŞDKASLDKLŞASDKLASKDLŞKASDASDSJJDSAJDJSADJASJD
					<!--Doktor paneli modal body-->
				    <div id="dpModal" class="modal fade" role="dialog">
				      <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color:#F8F8F8; border:none">
				        <div class="modal-header">
				          <h4 class="modal-title">Doktor Paneli</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				          	<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Cinsiyet"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Yaş"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Boy"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Ağırlık"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Bilgi1"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="form-group row dpTextgrp">
							  <input type="text" class="form-control col-md-3" placeholder="Bilgi2"/>
							  <div class="col-md-1"></div>
							  <input type="text" class="form-control col-md-6" placeholder="Değer Giriniz.."/>
							  <div class="col-md-1"></div>
							  <button class="button2"><div class="fa fa-trash"></div></button>
							</div>
							<div class="row">
								<button class="button">+ Ekle</button>
							</div>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="button">Temizle</button>
				          <button type="button" class="button2">Kaydet</button>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- Modal content-->
				  <!-- Doktor Yorum modal -->
					<div id="dyModal" class="modal fade" role="dialog">
				      <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color:#F8F8F8; border:none">
				        <div class="modal-header">
				          <h4 class="modal-title">Doktor Yorumu</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				        	<div class="form-group">
							    <textarea class="form-control rounded" id="exampleFormControlTextarea1" rows="8" placeholder="Yorum yaz.." style="resize:none"></textarea>
							</div>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="button">Temizle</button>
				          <button type="button" class="button2">Kaydet</button>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- Doktor Yorum modal -->
				</div>
			</div>
			<!--Doktor bilgileri-->
		</div>
		<!--icerik-->
	</div>
	<!--middle-->
	<!--footer-->
	<div class="row footer" style="z-index:10;width:100%">
	<div class="col-md-12 footer">
		<p class="copyright">© 2018 Mobil Med</p>
	</div>
	<!--footer-->
</div>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.js"></script>
	<script src=""></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>