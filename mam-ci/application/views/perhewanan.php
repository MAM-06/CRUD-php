<html>
  <head>
    <title>
	Percobaan menampilkan data dari database
	</title>
  </head>
 <body>
   <?php
     foreach($isi as $konten){
		echo "$konten->nama_hewan";
		echo '<br>';
	 }?>
 </body>
</html>


