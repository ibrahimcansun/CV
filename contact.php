<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObiNA</title>
    <link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/ibo/index.php">Ana Sayfa</a></li>
                    <li><a href="/ibo/about.php">CV</a></li>
                    <li><a href="/">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">
		<h3>İletişim Formu</h3>
		<form style="color:white">
			<div class="form-group row">
				<label class="col-sm-2">Ad:</label>
				<div class="col-sm-10"><input type="text" class="form-control" required /></div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Soyad:</label>
				<div class="col-sm-10"><input type="text" class="form-control" /></div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Mail adresi:</label>
				<div class="col-sm-10"><input type="email" class="form-control" required /></div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Mesajınız:</label>
				<div class="col-sm-10"><textarea placeholder="En fazla 1000 karakter girilebilir" rows="8" cols="25" maxlength="1000" class="form-control" required></textarea></div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Yollamadan önce yazdıklarınızı okumayı unutmayın!</label>
				<div class="col-sm-10"><input type="submit" class="btn-group-justified" style="color:black" formaction="~/Home/Index" /></div>
			</div>
		</form>
		<br />
		<address>
			Ataşehir - İstanbul<br />
			Serdivan - Sakarya<br />
			Merkez - Aksaray<br />
		</address>
		
		<address>
			<strong>İletişim adresim:</strong>   <a href="mailto:ibolican2000@gmail.com">ibolican2000@gmail.com</a><br />
		</address>
        <hr />
        <footer>
            <div class="text-center" style="background-color:dimgrey;">
                <p><a href="https://www.linkedin.com/in/ibrahim-cansun-b87604192/">Linkedin</a>|<a href="https://github.com/ibrahimcansun">GitHub</a></p>
            </div>
        </footer>
    </div>

</body>
</html>