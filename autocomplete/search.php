<?php
	mysql_connect("localhost","root",""); /* koneksi */
	mysql_select_db("pgri");			  /*  MySQL  */

	
	if (isset($_GET['input']))
	{
		$input = $_GET['input'];
		
		$query = mysql_query("SELECT Judul FROM ta WHERE Judul LIKE '%$input%'"); //query mencari hasil search
		$hasil = mysql_num_rows($query);
		if ($hasil > 0)
		{
			while ($data = mysql_fetch_row($query))
			{
				?>
				<a href="javascript:autoInsert('<?=$data[0]?>');"><?=$data[0]?><BR> <!-- hasil search -->
				<?php
			}
		}
		else
		{
			echo "Data tidak ditemukan";
		}
	
	}

	else if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM ta WHERE id='$id'");
		$info = mysql_fetch_row($query);
		//echo "ID : ".$info[0]."<BR>Nama : ".$info[1]."<BR>Stock : ".$info[2];
	}
?>