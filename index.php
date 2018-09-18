<!DOCTYPE html>
<html>
<head>
	<script>
	window.onload = function () {


	var dps = []; // dataPoints
	var second;
	var y=1;
	var chart = new CanvasJS.Chart("chartContainer", {
		zoomEnabled: true,
		backgroundColor: "#fff5e1",
		animationEnabled: true,
	  animationDuration: 1000,
		title :{

		},
		axisX: {
			gridColor: "blue",
			viewportMinimum: -0,
	   viewportMaximum: dataLength,
		 gridThickness: 1,
		 interlacedColor: "#fff5e5",
		 interval: 512,
		 prefix: "sec ",
		 valueFormatString: y++
	 },
		axisY: {
			gridColor: "rgb(214, 222, 169)",
			gridThickness: 4,
			includeZero: true,
			stripLines:[
				{
					value:32,
					color:"red",
					thickness:4
				}
			],
		},
		data: [{
			type: "line",
			dataPoints: dps,
			lineThickness: 1
		}]
	});

	var xVal = 0;
	var yVal = 100;
	var updateInterval = 0;
	var dataLength = dizi.length;
	console.log(dataLength);
	var x = dataLength%512;
	console.log(x);

	var updateChart = function (count) {

		for (var j = 0; j < count; j++) {
			yVal = dizi[j];
			dps.push({
				x: xVal,
				y: yVal,
				lineColor: "black"
			});
			xVal++;
		}
		if (dps.length > dataLength) {
			dps.shift();
		}
		chart.render();
	};

	updateChart(dataLength);
	setInterval(0);

	}
	</script>
	<meta charset="UTF-8">
	<title>Mobil Med</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="kutuphane.css"/>
</head>
  <body style="height:100%; width:100%">
	    <div class="row" id="header" style="position:absolute; top:0px; left:0px; height:70px; right:0px;overflow:hidden;">
			<div class="col-md-12 headercol" id="myHeader">
				<img src="imgs/mobilmedlogo2.png"/>
				<div class="hcikis"><a href="#">Çıkış Yap</a></div>
			</div>
	    </div>
	    <div id="content" style="position:absolute; top:70px; bottom:50px; left:0px; right:0px; overflow:auto;">
	<!--Header-->
	<!--sidebar-->
	<div class="row" id="kisibilgi">
		<div class="col-md-12 shadow p-3 mb-5 bg-white rounded " style="overflow-y:auto; position:absolute; max-width:90%; margin:60px;background-color:white">
				<div id="custom-search-input" style="margin-top:15px; margin-bottom:25px;">
	                <div class="input-group col-md-12">
						<span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button">
	                            <i class="fa fa-search"></i>
	                        </button>
	                    </span> <!--ara()-->
	                    <input id="kisiarama" type="text" class="form-control input-lg" placeholder="İsim veya Soyisim.." onkeyup="aramaisim(this.value)" />
	                </div>
	            </div>
	            <div class="row p-3" style="font-weight:bold">
	            	<div class='col-4 col-md-2 col-lg-2'>İsim</div>
		    		<div class='col-4 col-md-2 col-lg-2'>Cinsiyet</div>
		    		<div class='col-4 col-md-2 col-lg-2'>Yaş</div>
		    		<div class='col-md-2 d-none d-md-block d-md-lg'>Boy</div>
		    		<div class='col-md-2 d-none d-md-block d-md-lg'>Kilo</div>
		    	</div>
		    	<div id="kisibilgilistele">

				</div>
	</div>
	</div>
	<!--sidebar-->
	<!--middle-->
	<div class="row" id="ortaid">
		<div class="col-md-3 col-sm-12" id="mySideid">
		<div class="shadow p-3 mb-5 bg-white rounded" id="mySidebar" style="z-index:1;">
			<div class="bilgiler">
				<div class="border-bottom" style="padding-bottom:25px">
					<div class="fa fa-chevron-circle-left" onclick="f_bilgi_geri()" style="position:absolute; margin-top:20px"></div>
						<div style="padding:0px; margin-left:50px">
							<div id="kbisim" style="word-wrap:break-word; font-weight:bold"></div>
							<div id="kbemail" style="word-wrap:break-word;"></div>
						</div>
				</div>
	            <div id="custom-search-input" style="margin-top:15px; margin-bottom:25px;">
	                <div class="input-group col-md-12"><!--ekglistele(ekglisteleid.value)-->
	                    <input type="text" class="form-control input-lg" id="ekglisteleid" onkeyup="aramaekg(this.value);" placeholder="ID, tarih, teşhis" />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button">
	                            <i class="fa fa-search"></i>
	                        </button>
	                    </span>
	                </div>
	            </div>
	            <div class="d" style="height:430px; overflow-y:scroll; overflow-y:auto">
	            	<ul class="kisibilgileri" id="kbilgiler">

	            	</ul>
	        	</div>
   			</div>
		</div>
		</div>
		<!--icerik-->
		<div class="col-md-9 col-sm-12" style="padding:0px; margin:0px;">
			<!--üst bilgiler-->
			<div class="row" style="padding:10px">
				<div class="col-md-12">
					<div class="sagust float-left">
						<span id="TBNo" style="font-weight:bold"></span><br>
						<span id="TBTarih"></span>
					</div>
					<div class="solust float-right" style="margin-top:6px">
						<button class="button">Paylaş</button>
						<button class="buttondel" data-toggle="modal" data-target="#silModal"><div class="fa fa-trash fa-xm"><span style="font-weight:normal; font-size:normal"> Sil</span></button>
						<button class="button"> < > </button>
					</div>
				</div>
			</div>
			<!--üst bilgiler-->
			<!--orta resim alanı-->
			<div class="row">
				<div class="col-md-12" id="chartContainer" style="min-height:300px; min-width:300px"></div>
				<script src="canvasjs.min.js"></script>
			</div>
			<!--orta resim alanı-->
			<!--alt bilgiler-->
			<div class="row altbilgiler" style="margin-top:25px">
				<div class="col-md-3">
					Ortalama Nabız<br>
					<span id="TBOnabiz">00</span>
				</div>
				<div class="col-md-3">
					Ortalama RR Mesafesi<br>
					<span id="TBORRMesafesi">00</span>
				</div>
				<div class="col-md-3">
					Tahmini Teşhis<br>
					<span id="TBTahminiTeshis">Teşhis</span>
				</div>
				<div class="col-md-3">
					<button class="button2" onclick="ekgbilgigeri()"> << </button>
					<button class="button2" onclick="ekgbilgiileri()"> >> </button>
				</div>
			</div>
			<!--alt bilgiler-->
			<!--Doktor bilgileri-->
			<div class="row" style="margin-top:15px;">
				<div class="col-md-5 border-top border-right" style="padding:15px 35px">
					<span  style="font-size:20px;">Doktor Paneli</span>
					<span style="float:right; margin-right:0px; margin-top:3px"><a href="#" data-toggle="modal" data-target="#dpModal" style="color:black; text-decoration:none;">Ekle</a></span><br>
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

				<div class="col-md-7 border-top" style="padding:15px 35px">
					<span  style="font-size:20px">Doktor Yorumu</span>

					<span style="float:right; margin-right:0px; margin-top:3px">
						<a href="#" data-toggle="modal" data-target="#dyModal" style="color:black; text-decoration:none">Düzenle</a>
					</span><br>
					<p style="word-wrap:break-word;"></p>
					<!--Doktor paneli modal body-->
				    <div id="dpModal" class="modal fade" role="dialog">
				      <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color:#F8F8F8; border:none">
				        <div class="modal-header">
				          <h4 class="modal-title">Doktor Paneli</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body" id="dpmodalveri">
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
				        </div>
  						<div class="row">
								<button class="button" onclick="bilgiekle()">+ Ekle</button>
						</div>
				        <div class="modal-footer">
				          <button type="button" class="button">Temizle</button>
				          <button type="button" class="button2" onclick="bilgikaydet(this)">Kaydet</button>
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
				  <!-- Silmek istiyormusunuz? modal -->
					<div id="silModal" class="modal fade" role="dialog">
				      <div class="modal-dialog modal-lg" style="width:500px">
				      <div class="modal-content" style="background-color:#F8F8F8; border:none">
				        <div class="modal-body" style="text-align:center">
							Ölçümü silmek istediğinize emin misiniz?
							<div class="silbuttons">
								<button type="button" class="button3" data-dismiss="modal">Hayır</button>
								<button type="button" class="button4" onclick="silekg()" data-dismiss="modal">Evet</button>
							</div>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- Silmek istiyormusunuz? modal -->
				</div>
			</div>
			<!--Doktor bilgileri-->
		</div>
		<!--icerik-->
	</div>
	<!--middle-->
	    </div>
	    <div class="row" id="footer" style="position:absolute; bottom:0px; height:50px; left:0px; right:0px; overflow:hidden;">
	   		<div class="col-md-12 footer">
				<p class="copyright">© 2018 Mobil Med</p>
			</div>
	    </div>
	    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.js"></script>
	<script src=""></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>
		/*window.onscroll = function() {myFunction()};
		var sidebarim = document.getElementById("mySidebar");
		var sticky = sidebarim.offsetTop;
		if(window.pageYOffset < sticky)
		{
			sidebarim.style.position = "absolute";
		}
		function myFunction(){
			if(window.pageYOffset > sticky)
			{
				sidebarim.style.position = "fixed";
				sidebarim.style.top = 0;			}
			if(window.pageYOffset < sticky)
			{
				sidebarim.style.position = "absolute";
				sidebarim.style.top = "auto";
			}
		}	*/
	</script>
	<script type="text/javascript">
		function f_bilgi_geri(){
			location.reload();
		}
		var kisibilgiJ = document.getElementById("kisibilgi");
        var ortaJ = document.getElementById("ortaid");
        var sidebarJ = document.getElementById("mySideid");
        kisibilgiJ.style.visibility = "visible";
        sidebarJ.style.visibility = "hidden";
        ortaJ.style.visibility = "hidden";
        var elegunekarsiyapayanliz = "";
        var useridm = "";
        var ekgsayi = "";
		function git(ids){
		useridm=ids;
		var gonderi = {"emre":ids};
         $.ajax({
             type: "POST",
             url: "kayit.php",
             data: gonderi,
             success: function(data)
             {
             	var obj = JSON.parse(data);
             	//alert(obj.counters.length);
             	var stringbilgi = "";
             	ekgsayi = obj.liste.length;
             	elegunekarsiyapayanliz = obj.liste[0].a0;
             	for(var ob=0; ob<obj.liste.length; ob++){
             	stringbilgi += "<li class='kisibilgi border-bottom' onclick='teshisgoster("+obj.liste[ob].a0+")'><span style='font-weight:bold;'> EKG-"+ obj.liste[ob].a0 +" </span><br> <span class='kisibilgiemail'> "+ obj.liste[ob].a7 +" </span><br>"+obj.listesonuc[ob].a19+"</li>";
             	}
             	kisibilgiJ.style.visibility = "hidden";
             	sidebarJ.style.visibility = "visible";
                var kbilgilerJ = document.getElementById("kbilgiler");
                kbilgilerJ.innerHTML = stringbilgi;
                var kbisimJ = document.getElementById("kbisim");
                var kbemailJ = document.getElementById("kbemail");
                kbisimJ.innerHTML = obj.listeisim[0].a0;
                kbemailJ.innerHTML = obj.listeisim[0].a1;
                teshisgoster(obj.liste[0].a0);
             }
         });
		}
		function teshisgoster(olcumids){
			if(olcumids != null && olcumids != undefined){
				var teshisgonderi = {"olcumid":olcumids};
				$.ajax({
					type: "POST",
					url: "ekgteshis.php",
					data: teshisgonderi,
					success: function(olcumdata)
					{
						var objteshis = JSON.parse(olcumdata);
						if(objteshis.teshisliste[0].a1 != null){
							ortaJ.style.visibility = "visible";
							var TBNoJ = document.getElementById("TBNo");
							var TBTarihJ = document.getElementById("TBTarih");
							var TBOnabizJ = document.getElementById("TBOnabiz");
							var TBORRMesafesiJ = document.getElementById("TBORRMesafesi");
							var TBTahminiTeshisJ = document.getElementById("TBTahminiTeshis");
							TBNoJ.innerHTML = "EKG-" + objteshis.teshisliste[0].a1;
							TBTarihJ.innerHTML = objteshis.teshisliste[0].a10;
							TBOnabizJ.innerHTML = objteshis.teshisliste[0].a6;
							TBORRMesafesiJ.innerHTML = objteshis.teshisliste[0].a7;
							TBTahminiTeshisJ.innerHTML = objteshis.teshisliste[0].a2;
						}
						else{
							alert("Bilgilerinizde bir aksilik var! Doktorunuza bildiriniz...");
						}
					}
				});
			}
		}
	</script>
	<script type="text/javascript">
		ara();

		function ara(){
			var aranankisi = document.getElementById("kisiarama").value;
			var arananData = {"aranankisiData":aranankisi};
			$.ajax({
				type: "POST",
				url: "ara.php",
				data: arananData,
				success: function(bulunandata){
					var bulunanobj = JSON.parse(bulunandata);
					var kisibilgilisteleJ = document.getElementById("kisibilgilistele");
					var stringbilgix = "";
					var i = 0;
					var clsrenk = null;
					for(var kb=0; kb<bulunanobj.arananliste.length; kb++)
					{
						var cinsiyet = null;
						if(bulunanobj.arananliste[kb].a5 == 1){
							cinsiyet = "Erkek";
						}else if(bulunanobj.arananliste[kb].a5 == 0){
							cinsiyet = "Kız";
						}else{
							cinsiyet = "Diğer";
						}
						stringbilgix += "<div class='row p-3 border-top " + bulunanobj.arananliste[kb].b2 + "' onclick='git("+bulunanobj.arananliste[kb].a0+")'> <div class='col-4 col-md-2 col-lg-2'><div>"+bulunanobj.arananliste[kb].a3
						+"</div><div style='font-size:12px; word-wrap:break-word'>"+bulunanobj.arananliste[kb].a1
						+"</div></div> <div class='col-4 col-md-2 col-lg-2'>" + cinsiyet + "</div><div class='col-4 col-md-2 col-lg-2'>"+ bulunanobj.arananliste[kb].b1 +"</div><div class='col-md-2 d-none d-md-block d-md-lg'>"+ bulunanobj.arananliste[kb].a6 +"</div><div class='col-md-2 d-none d-md-block d-md-lg'>"+bulunanobj.arananliste[kb].a7+"</div></div>";
					}
					kisibilgilisteleJ.innerHTML = stringbilgix;
					if(bulunanobj.arananliste.length==0){
						kisibilgilisteleJ.innerHTML = "<div class='border-top' style='text-align:center;width:100%;'><div style='margin-top:25px; font-weight:bold;color:#007bff'>İlgili Sonuç bulunamadı!</div></div>";
					}
				}
			});
		}
	</script>
	<script>
		function ekglistele(ekgnum){
        	var ekgnumd = {"ekgnumrv":ekgnum,"insafsiz":elegunekarsiyapayanliz};
        	$.ajax({
        		type: "POST",
        		url: "ekgliste.php",
        		data: ekgnumd,
        		success: function(ekggelen){
        			var ekglistobj = JSON.parse(ekggelen);
        			ekgsideJ = document.getElementById("kbilgiler");
        			var stringekg = "";
        			for(var e=0; e<ekglistobj.ekgliste.length; e++){
        			   stringekg += "<li class='kisibilgi border-bottom' onclick='teshisgoster("+ekglistobj.ekgliste[e].a0+")'> <span style='font-weight:bold'> EKG-"+ ekglistobj.ekgliste[e].a0 +" </span><br> <span class='kisibilgiemail'> "+ ekglistobj.ekgliste[e].a7 +"</span><br>"+ekglistobj.sonucliste[e].a19+"</li>";
        			}
        			ekgsideJ.innerHTML = stringekg;
        			 if(ekglistobj.sonucliste.length==0){
        				ekgsideJ.innerHTML = "<div class='border-top' style='width:100%'><div style='margin-top:15px; text-align:center; color:#007bff'>Sonuç bulunamadı!</div></div>";
        			}
        		}
        	});
        }
	</script>
	<script>
		function silekg(){
			var ekgnom = document.getElementById("TBNo").innerHTML;
			var ekgnomJ = ekgnom.split("EKG-");
			var ekgnomJSON = {"ekgnomData":ekgnomJ[1]};
			$.ajax({
				type: "POST",
				url: "ekgsil.php",
				data: ekgnomJSON,
				success: function(ekgsilinen){
					if(ekgsayi<=1){location.reload();}else{git(useridm);}
				}
			});
		}
	</script>
	<script>
		function aramaisim(keywordi){
			var isimlistler = document.getElementById("kisibilgilistele");
			var bulunanisim = isimlistler.getElementsByClassName("row");
			for(var c=0; c<bulunanisim.length; c++){
				var divd = bulunanisim[c].getElementsByTagName("div")[0].getElementsByTagName("div")[0];
				if(divd.innerText.toLowerCase().indexOf(keywordi.toLowerCase())<0){
					bulunanisim[c].style.display="none";
				}else{
					bulunanisim[c].style.display="";
				}
			}
			var bulunanisim2=[];
			for(var r=0; r<bulunanisim.length; r++){
				if(bulunanisim[r].style.display==""){
					bulunanisim2.push(bulunanisim[r]);
				}
			}
			for(var s=0; s<bulunanisim2.length; s++){
				if(s==0){
					bulunanisim2[s].className="row p-3 border-top kisilistebg2";
				}else{
					if(s%2==1){
						bulunanisim2[s].className="row p-3 border-top kisilistebg1";
					}else{
						bulunanisim2[s].className="row p-3 border-top kisilistebg2";
					}
				}
			}
		}
		function aramaekg(keyworde){
			var ekglistler = document.getElementById("kbilgiler");
			for(var i=0; i<ekglistler.childElementCount; i++)
			{
				if(ekglistler.children[i].innerText.toLowerCase().indexOf(keyworde.toLowerCase())<0){
					ekglistler.children[i].style.display="none";
				}else{
					ekglistler.children[i].style.display="block";
				}
			}
		}
		function ekgbilgigeri(){
			alert("geri");
		}
		function ekgbilgiileri(){
			alert("ileri");
		}
		function tamekranekg(){

		}
		function bilgiekle(){
			var bilgi = document.getElementById("dpmodalveri");
			var sayi = bilgi.getElementsByClassName("row");
			var ss = sayi.length + 1;
			if(ss<12){
			bilgi.innerHTML += "<div class='form-group row dpTextgrp'><input type='text' class='form-control col-md-3' placeholder='Bilgi"+ ss +"'/><div class='col-md-1'></div><input type='text' class='form-control col-md-6' placeholder='Değer Giriniz..'/><div class='col-md-1'></div><button class='button2' onclick='bilgisil(this)'><div class='fa fa-trash'></div></button></div>";
			}else{
				alert("Daha fazla veri girilemez!");
			}
		}
		function bilgisil(cop){
			var divcop = cop.parentElement;
			var anadiv = divcop.parentElement;
			var rowz = anadiv.getElementsByClassName("row");
			divcop.remove();
			for(var a=2; a<rowz.length; ++a){
				var input = rowz[a].getElementsByTagName("input")[0];
				input.setAttribute("placeholder","Bilgi"+ (a+1) +"");
			}
		}
		function bilgikaydet(kaydetbutton){
			var gonderilecek=[];
			var rowzparent = kaydetbutton.parentElement.parentElement.getElementsByClassName("modal-body")[0];
			var rowz=rowzparent.getElementsByClassName("row");
			for(var a=0; a<rowz.length; ++a){
				var inputlar = rowz[a].getElementsByTagName("input");
				var a1 = inputlar[0].value;
				var a2 = inputlar[1].value;
				var eleman={bilgi:a1,deger:a2};
				if(!a1.toString().trim() == "" && !a2.toString().trim() == "")
				gonderilecek.push(eleman);
			}
			var atiyorum = JSON.stringify(gonderilecek);
			$.ajax({
				type:"POST",
				url:"kaydetbilgi.php",
				data:atiyorum,
				succes: function(c){

				}
			});
		}
	</script>
  </body>
</html>
