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
				
        <form method="post" action="/kuliah/{{$kuliah->id}}/update">
          {!! csrf_field() !!}
		  <div class="form-group">
			<label for="nim">NIM</label>
			  <input type="nim" class="form-control" id="nim" name="nim" value="{{ $kuliah->nim }}">
		  </div>
          <div class="form-group">
			<label for="nama_mk">Nama Matkul</label>
			  <input type="nama_mk" class="form-control" id="nama_mk" name="nama_mk" aria-describedby="nama_mk" value="{{ $kuliah->nama_mk }}">
		  </div>
		  <div class="form-group">
			<label for="hari">Pilih Gender</label>
			  <select class="form-control" id="hari" name="hari">
			  	<option value="Senin" @if($kuliah->har == 'Senin') selected @endif>Senin</option>
				<option value="Selasa" @if($kuliah->hari == 'Selasa') selected @endif>Selasa</option>
				<option value="Rabu" @if($kuliah->har == 'Rabu') selected @endif>Rabu</option>
				<option value="Kamis" @if($kuliah->har == 'Kamis') selected @endif>Kamis</option>
				<option value="Jumat" @if($kuliah->har == 'Jumat') selected @endif>Jumat</option>
				<option value="Sabtu" @if($kuliah->har == 'Sabtu') selected @endif>Sabtu</option>
			  </select>
		  </div>
		  <div class="form-group">
		    <label for="jam">Jam</label>
			   <input type="jam" class="form-control" id="jam" name="jam" value="{{ $kuliah->jam }}">
		  </div>
          
          <button type="submit" class="btn btn-success btn-sm my-3">Edit Data</button>
          <a href="/mahasiswa" class="card-link btn-sm">Kembali</a>
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