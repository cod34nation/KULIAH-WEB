<!DOCTYPE html>
<html>
<head>
	<title>::AJAX & JQUERY</title>

	<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
 <script type="text/javascript">


function jalankan() {
	if ($("#nama").val()=="" || $("alamat").val()=="" ||$("#jurusan").val()=="") {

		alert("Tidak boleh ada field kosong");
		return(false);
	}else{

		var namax= $("#nama").val();
		var alamatx =$("#alamat").val();
		var jurusax =$("#jurusan").val();

		$.ajax({

			type:"POST",
			url	:"inputData.php",
			data: {nama:namax, alamat:alamatx,jurusan:jurusax},

			error :function (html) {
				$("#hasil").html("<div style=color:red>Maaf tidak bisa melanjutkan proses</div>");

			},

			success:function (html) {
				$("#Hasil").html("<div style=color:#blue;text-shadow:2px 2px font-size:23px; font-weight:bold>"+html+"</div>");

			},timeout:7000


		});return false;

	}
}

function view(){
	var barisx =$("#baris").val();
	$.ajax({

		type:"POST",
		url	:"view.php",
		data: {baris:barisx},

		error :function (html) {
			$("#view").html("<div style=color:red>Maaf tidak bisa melanjutkan proses</div>");

		},

		success:function (html) {
			$("#view").html("<div style=color:#blue;text-shadow:2px 2px font-size:23px; font-weight:bold>"+html+"</div>");

		},timeout:7000


	});return false;
}

 </script>
</head>
<body>

<form >

	Masukkan Nama :<input type="text" name="nama" id="nama"> <br>
	Masukkan Jurusan :<input type="text" name="jurusan" id="jurusan"><br>
	Masukkan Alamat :<input type="text" name="alamat" id="alamat"><br>

	<input type="button" name="submit" value="submit" onclick="jalankan()">

	<div>

		<h1>Hasil</h1>
		<div id="Hasil"></div>

	</div>
	<h4>Untuk melihat seluruh data silahkan masukkan jumlah data yg ingin ditampilkan</h4>
	<input type="text" name="baris" placeholder="Jumlah Baris" id="baris">
	<button type="button"  name="submit"  onclick="view()">Klik</button>
	<div id="view"></div>

</form>








</body>
</html>
