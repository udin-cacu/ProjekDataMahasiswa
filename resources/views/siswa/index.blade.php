@extends ('layout.main')

@section ('title','Daftar Siswa')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h4 class="mt-3">Daftar Siswa</h4>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm form-inline my-3" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Kuliah
			</button>

			@if (session('status'))
    		<div class="alert alert-success">
        	{{ session('status') }}
   			 </div>
			@endif

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">NIM</th>
						<th scope="col">Prodi</th>
						<th scope="col">Kode Prodi</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Kelas</th>
						<th scope="col">Semester</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data_siswa as $siswa)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$siswa->nama}}</td>
						<td>{{$siswa->nim}}</td>
						<td>{{$siswa->prodi->nama_prodi}}</td>
						<td>{{$siswa->prodi->kode_prodi}}</td>
						<td>{{$siswa->jenis_kelamin}}</td>
						<td>{{$siswa->kelas}}</td>
						<td>{{$siswa->semester}}</td>
						<td>

						<a href="/siswa/{{$siswa->id}}/edit" class="badge badge-success btn-sm">Edit</a>
						<a href="/siswa/{{$siswa->id}}/delete" class="badge badge-danger btn-sm">Delete</a>

							
						</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     <div class="modal-body">
			        <form method="post" action="/siswa/create">
			        	@csrf
					  <div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="nama">
					  </div>
					  <div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="nim" class="form-control" id="nim" name="nim" >
					  </div>
					  <div class="form-group">
					    <label for="jenis_kelamin">Pilih Gender</label>
					    <select class="form-control" id="Jenis_kelamin" name="jenis_kelamin" >
					      <option value="Laki-laki">Laki-laki</option>
					      <option value="Perempuan">Perempuan</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="kelas">Kelas</label>
					    <input type="kelas" class="form-control" id="kelas" name="kelas" >
					  </div>
					  <div class="form-group">
					    <label for="semester">Semester</label>
					    <input type="semester" class="form-control" id="semester" name="semester" >
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
					  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>
</body>
@endsection

<style type="text/css">
	body {
		background-image: url("/img/notebook.jpg");
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