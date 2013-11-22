<?php
class mencari {
	public function caribuku($keyword, $kategori){
	switch ($kategori){
	case 'buku':	
	$daftarbuku = simplexml_load_file('daftarbuku.xml');
	foreach ($daftarbuku as $atribut) {
			if ($atribut-> judul == $keyword) {
				$judulbuku = $atribut -> judul;
				$pengarangbuku = $atribut -> pengarang;
				$halaman = $atribut -> halaman; 
				$result = array();
				$result['status'] = 'OK';
				$result['judulbuku'] = (string) $judulbuku;
				$result['pengarang'] = (string) $pengarangbuku;
				$result['halaman'] = (string) $halaman;
 				//print_r ((string) $judulbuku);
				return $result;
			}
			else{
				$daftarbuku = simplexml_load_file('buku.xml');
				foreach ($daftarbuku as $atribut) {
					if ($atribut-> judul == $keyword) {
						$judulbuku = $atribut -> judul;
						$pengarangbuku = $atribut -> pengarang;
						$halaman = $atribut -> halaman;
						$result = array();
						$result['status'] = 'OK';
						$result['judulbuku'] = (string) $judulbuku;
						$result['pengarang'] = (string) $pengarangbuku;
						$result['halaman'] = (string) $halaman;
		 				//print_r ((string) $judulbuku);
						return $result;
					}
			}
			}
		}
		break;


	}	
	
		$result = array();

		$result['status'] = 'error';
		$result['judulbuku'] = $keyword;
		return $result;

	}
	
}
	


/*
echo $daftarbuku -> buku[0] -> judul;
    foreach ($daftarbuku as $songinfo):
        $title=$daftarbuku->judul;
        $artist=$daftarbuku->pengarang;
        echo $title,$artist;
    endforeach;
    echo "</ul>";


/*


function search(){
	$xml = simplexml_load_file('../daftarbuku.xml');
	echo $xml->getName() . "<br>";

		foreach($xml->children() as $child)
	  {
	  echo $child->judul . "</br>";
	  echo $child->pengarang . "</br>";
	  echo $child->getName() . ": " . $child->halaman . "</br>";
	  }
		}*/
?>