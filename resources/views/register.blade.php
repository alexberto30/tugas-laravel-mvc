<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form</title>
</head>
<body>
	<form action="{{ route('welcome') }}" method="POST">
		@csrf
		<div>	
			<h1>Buat Account Baru!</h1>
			<h3>Sign Up Form</h3>
			<label>Fisrt Name</label><br>
            <input type="text" name="namaDepan">
            <br>
            <label> Last Name</label><br>
            <input type="text" name="namaBelakang">
			<p>Gender:</p>
			<input type="radio" name="">Male<br>
			<input type="radio" name="">Female<br>
			<input type="radio" name="">Other

			<p>Nationality:</p>
			<select>	
				<option value="Indonesian">Indonesian</option>
				<option value="Japanese">Japanese</option>
				<option value="Australian">Australian</option>
			</select>

			<p>Language Spoken</p>
			<input type="checkbox" name="">Bahasa Indonesia<br>
			<input type="checkbox" name="">English<br>
			<input type="checkbox" name="">Other

			<p>Bio</p>
			<textarea cols="30" rows="5">	</textarea><br>
			<button type="submit">Sign Up</button>
		</div>
	</form>
</body>
</html>