 <?php 
 
 $title = 'IrfanWeb_Admin'; 
 include_once 'koneksi.php'; 
 
 $sql = 'SELECT * FROM data_barang'; 
 $result = mysqli_query($conn, $sql); 
 
 include_once 'header.php'; 
 
 echo '<a href="tambah_barang.php">Tambah Barang</a>'; 
 if ($result): 
 ?> 
 <form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">	
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 <table> 
	 <tr> 
		 <th>Gambar</th> 
		 <th>Nama Barang</th> 
		 <th>Katagori</th> 
		 <th>Harga Jual</th> 
		 <th>Harga Beli</th> 
		 <th>Stok</th> 
		 <th>Aksi</th> 
		 </tr> 
		 
		 <?php while($row = mysqli_fetch_array($result)): ?> 
		 <tr> 
			 <td><?php echo "<img src=\"{$row['gambar']}\" />";?></td> 
			 <td><?php echo $row['nama'];?></td> 
			 <td><?php echo $row['kategori'];?></td> 
			 <td><?php echo $row['harga_jual'];?></td> 
			 <td><?php echo $row['harga_beli'];?></td> 
			 <td><?php echo $row['stok'];?></td> 
			 <td> 
				 <a href="edit_barang.php?id=<?php echo $row['id_barang'];?>">Edit</a> 
				 <a href="hapus_barang.php?id=<?php 
				echo $row['id_barang'];?>">Delete</a> 
				 </td> 
				 </tr> 
				 <?php endwhile; ?> 
				 </table> 
				 <?php 
				 endif; 
				 
				 include_once 'footer.php'; 
				 ?>

<h1 class="tengah"><marquee>Disusun oleh</h1></marquee>		
<img class="tengah" src="irfan.jpg" style="width:150px;height:150px">	
<h2 class="tengah">Irfan Hari Yadi</h2>
<h2 class="tengah">311810068</h2>
</body>
</html>
