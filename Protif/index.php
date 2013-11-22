<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hey Dude, Look for Something ?</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pure-min.css">
</head>
<body style="background-color:#49739d">

		<div class="pure-menu pure-menu-open pure-menu-horizontal" id="headernya">
		    <ul>
		        <li data-value ="buku" onclick="gantiKategori('buku')"><a href="#">Buku</a></li>
		        <li data-value ="mahasiswa" onclick="gantiKategori('mahasiswa')"><a href="#">Mahasiswa</a></li>
		        <li data-value ="makanan" onclick="gantiKategori('makanan')"><a href="#" >Makanan</a></li>
		    </ul>
		</div>
	<div id="content">
		<div id="text">
			<h1> Hey Dude, Look for Something ? </h1>
		</div>
		<form class="pure-form" action="javascript:search()">
	    	<input id="keyword" type="text" placeholder="search here" class="pure-input-rounded" required>
	    	<button type="submit" class="pure-button">Go</button>
		</form>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>

<script type="text/javascript">
	var kategori;
	function gantiKategori(selectedKategori){
		kategori = selectedKategori;
		console.log(kategori);
	};
	function search() {
		var input = document.getElementById("keyword").value;
		window.location = "http://localhost/protif/tampilkan.php?keyword=" + input + "&kategori=" + kategori;
	};


</script>
