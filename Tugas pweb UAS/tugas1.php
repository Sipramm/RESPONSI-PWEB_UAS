<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir PWEB MATKUL</title>
<style>
	*{
		box-sizing: border-box;
	}
	body{
		font-family: times new roman;
		padding: 10px;
		background : #ffffff;
		background-image: url("koran.jpg");
	}

	.header{
		padding: 30px;
		text-align: center;
		background: white;
	}

	.header h1{
		font-size: 50px;
	}

	.topnav{
		overflow: hidden;
		background-color: #333; 
	}

	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	.leftcolumn{
		float: left;
		width: 25%;
		background-color: #f1f1f1;
		padding-left: 20px
		font-size : 12%;
		text-align: justify;
	}

	.centercolumn{
		float: left;
		width: 40%;
		background-color: #f1f1f1;
		padding-left: 10px
	}

	.rightcolumn{
		float: left;
		width: 30%;
		background-color: #f1f1f1;
		padding-left: 20px
	}

	.fakeimg{
		background-color: #aaa;
		width: 75%;
	}

	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 20px;
	}

	.leftcolumn, .rightcolumn{
		width: 100%
		padding0;
	}

	.topnav a{
		float: none;
	    width: 100%
	}

</style>
</head>
<body>
	<div class="header" style="background-color: cornflowerblue;">
		<h1 style="font-family: serif; color: white;">Welcome To My Website</h1>
	</div>

	<div class="rightcolumn" style="background-color: grey;" >
			<div class="card" style="background-color: white">
				<h1><center>KALENDER</center></h1>
			<div align="center"><a href="kalender.php"><b>Lihat Kalender Bulan ini<b></a></div>
				<center><img src="img/kalender.jpg" width="300px" height="250px"></center>
    <br><br>
    <div></div>
    <h1><center>KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
			</div>
		</div>

	<div class="row" style="background-color: white;">
		<div class="centercolumn" style="background-color: grey;">
			<div class="card">

				<h2 align="center" style="font-family: times new roman">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>
				<div>
					<center><img src="img/uad.jpg" width="500px" height="325px"></center>
				</div>
				<br><br>

					<div align="center"><h2>Isi Data Diri Anda</h2></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td>Nama lengkap</td>
					    <td><input type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td>NIM</td>
					    <td><input type="text" name="nim" id="nim"></td>
				    </tr>
                    <tr>
                        <td>Kelas</td>
					    <td><input type="text" name="kelas" id="kelas"></td>
                    </tr>
				    <tr>
					    <td>E-mail</td>
					    <td><input type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td>Prodi</td>
					<td><select name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Farmasi</option>
						<option>Teknik Industri</option>
						<option>Teknik Kimia</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="Kirim" id="kirim"><input type="reset" name="reset" value="Batal"></td>
				</tr>
				
			</table>
		</form>
		<br><br>
		<div align="center"><a href="lihat.php"><b>Lihat Data Diri<b></a></div>
			</div>
		</div>

		<div class="leftcolumn">
			<div class="card" style="background-color: lightgray;">
				<div>
					<center><img src="img/crypto.png" width="300px"></center>
				</div>
				<div class="card" style="background-color: lightgray;">
		    		<h3>My Social Media</h3>
		    		<img src="img/ig.jpg" width="45px">
		    		<a href="https://www.instagram.com/sipramm_/?hl=id">sipramm_</a><br><br>
		    		<p>Copyright ©️Dzaki Pram</p>
	       		</div>
			</div>
		</div>
</body>
</html>