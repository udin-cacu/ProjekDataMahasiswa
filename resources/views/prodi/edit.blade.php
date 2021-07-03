@extends ('layout.main')

@section ('title','Form Edit')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h4 class="mt-3">Form Edit Data Kuliah</h4>
			{{-- menampilkan error validasi --}}
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                   <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                   </ul>
                   </div>
                   @endif
				
        <form method="post" action="/matkul/{{$matkul->id}}/update">
          {!! csrf_field() !!}
          <div class="form-group">
			<label for="nama_mk">Nama Matkul</label>
			  <input type="nama_mk" class="form-control" id="nama_mk" name="nama_mk" aria-describedby="nama_mk" value="{{ $matkul->nama_mk }}">
		  </div>
		  <div class="form-group">
		    <label for="sks">SKS</label>
			   <input type="sks" class="form-control" id="sks" name="sks" value="{{ $matkul->sks }}">
		  </div>
          
          <button type="submit" class="btn btn-success btn-sm my-3">Edit Data</button>
          <a href="/matkul" class="card-link btn-sm">Kembali</a>
        </form>


		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/typing-849806.jpg");
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
    
  }
  h1{
    text-align: center;
    font-family: blue;
    font-size: 100px;

  }

</style>