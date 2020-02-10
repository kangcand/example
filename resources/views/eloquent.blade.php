<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($data as $temp)
    <h3> {{$temp->nama}}<small>[{{$temp->nim}}]</small></h3>
				<h5>Hobi :
					@foreach($temp->hobi as $tampung)
						<small>{{ $tampung->hobi }}, </small>
					@endforeach
				</h5>
				<h4>
        <li>Nama Wali : <strong>{{ $temp->wali->nama }}</strong></li>
					<li>Dosen Pembimbing : <strong>{{$temp->dosen->nama}}</strong></li>
				</h4>
				<hr/>
			@endforeach
		</div>
</body>
</html>
