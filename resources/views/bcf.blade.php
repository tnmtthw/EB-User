<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			width: 50%;
			margin: 0 auto;
			font-size: 18px;
		}

		.row {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			margin-bottom: 10px;
		}

		.label {
			margin-right: 10px;
			font-weight: bold;
		}

		input {
			padding: 10px;
			margin: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			font-size: inherit;
		}

		select {
			padding: 10px;
			margin: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: inherit;
		}
		button {
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="{{ route('docuRequest') }}" method="POST">
	@csrf
		<div class="row">
			<label class="label" for="firstname">First Name:</label>
			<input type="text" name="firstname" value="{{ Auth::user()->firstname }}">

			<label class="label" for="mname">Middle Name:</label>
			<input type="text" name="middlename" value="{{ Auth::user()->middlename }}">

			<label class="label" for="lastname">Last Name:</label>
			<input type="text"  name="lastname" value="{{ Auth::user()->lastname }}">
		</div>
		<div class="row">
			<label class="label" for="address">Address:</label>
			<input type="text" name="address" value="{{ Auth::user()->house_number . ' ' . Auth::user()->street . ', ' . Auth::user()->brgy . ', ' . Auth::user()->city }}">
		</div>		
		<div class="row">
			<label class="label" for="bday">Date of Birth:</label>
			<input type="date" name="bday" value="{{ Auth::user()->bday }}">

			<label class="label" for="por">Period of Residency in Barangay East Rembo:</label>
			<select name="por">
				<option value="1">Less than 1 year</option>
				<option value="2">1-5 years</option>
				<option value="3">5-10 years</option>
				<option value="4">More than 10 years</option>
			</select>
		</div>
		<div class="row">
			@php
			$filePath = public_path('province.txt');
			$streets = file($filePath, FILE_IGNORE_NEW_LINES);
			@endphp
			<label class="label" for="pob">Place of Birth</label>
			<select name="pob">
			  <option value="">Select a street</option>
			  @foreach($streets as $street)
				  <option value="{{ $street }}">{{ $street }}</option>
			  @endforeach
			</select>
		</div>
		<div class="row">
			<label class="label" for="voter">Registered East Rembo Voter?</label>
			<div>
				<label>
					<input type="radio" name="voter" value="Yes"> Yes
				</label>
				<label>
					<input type="radio" name="voter" value="No"> No
				</label>
			</div>
		</div>
		<div class="row">
			<label class="label" for="howner">House Owner:</label>
			<input type="text" name="howner">

			<label class="label" for="rhowner">Relation to House Owner:</label>
			<input type="text" name="rhowner">
		</div>
		<div class="row">
			<label class="label" for="roa">Reason for Application:</label>
			<textarea id="reason" name="roa" rows="4" cols="50"></textarea>
		  </div>		  
		<div class="row">
			<label class="label" for="signature">Signature</label>
			<input type="file" name="signature">	
		</div>	
		<div class="row">
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>
