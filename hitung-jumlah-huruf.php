<!-- Rendy Perdana -->

<html>
<head>
	<title>Program Sederhana</title>
</head>
<body bgcolor="khaki">
	<center>
		<h1 style="text-transform: uppercase;"><font color="red">hitung jumlah huruf</font></h1>
		<form action="" method="POST">
			<fieldset style="width: 25%;">
				<legend>Input</legend>
				<br>
				<table>
					<tr>
						<td>Huruf</td>
						<td>:</td>
						<td><input type="text" name="huruf" maxlength="1" pattern="[A-Za-z]" required></td>
					</tr>
					<tr>
						<td>Kalimat</td>
						<td>:</td>
						<td><textarea name="kalimat" style="width: 100%;"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<button type="submit" name="submit">Submit</button>
							<input type="reset" name="reset" value="Reset">
						</td>
					</tr>
				</table>
				<br>
			</fieldset>
		</form>
	</center>
</body>
</html>

<?php
	error_reporting(0);

	if(isset($_POST['submit'])) {
		$huruf 		= $_POST['huruf'];
		$kalimat 	= $_POST['kalimat'];

		function hitungHurufDariKalimat($a, $b) {
			$jumlah = 0;
			strlen($b);

			for($i=0; $i<strlen($b); $i++) {
				if($b[$i] == $a) {
					$jumlah++;
				}
			}

			$hasil = "Hasil hitung huruf <b>" . $a . "</b> muncul sebanyak <b>" . $jumlah . "</b> kali.";

			return $hasil;
		}

		echo "<br>";
		echo "<center>";
		echo "<fieldset style='width: 25%;'>";
		echo "<legend>Output</legend>";
		echo "<br>";
		echo "<table>";
		echo "<tr>";
		echo hitungHurufDariKalimat($huruf, $kalimat);
		echo "</tr>";
		echo "</table>";
		echo "</fieldset>";
		echo "</center>";
	}
?>