@extends ('layout.main')

@section ('title','Daftar Kuliah')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h4 class="mt-3">Daftar Kuliah</h4>

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
						<th scope="col">NIM</th>
						<th scope="col">Nama Matkul</th>
						<th scope="col">Hari</th>
						<th scope="col">Jam</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data_kuliah as $kuliah)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$kuliah->nim}}</td>
						<td>{{$kuliah->nama_mk}}</td>
						<td>{{$kuliah->hari}}</td>
						<td>{{$kuliah->jam}}</td>
						<td>

						<a href="/kuliah/{{$kuliah->id}}/edit" class="badge badge-success btn-sm">Edit</a>
						<a href="/kuliah/{{$kuliah->id}}/delete" class="badge badge-danger btn-sm">Delete</a>

							
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
			        <form method="post" action="/kuliah/create">
			        	@csrf
					  <div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="nim" class="form-control" id="nim" name="nim" aria-describedby="nim">
					  </div>
					  <div class="form-group">
					    <label for="nama_mk">Nama Matkul</label>
					    <input type="nama_mk" class="form-control" id="nama_mk" name="nama_mk" >
					  </div>
					  <div class="form-group">
					    <label for="hari">Hari</label>
					    <select class="form-control" id="hari" name="hari" >
					      <option value="Senin">Senin</option>
					      <option value="Selasa">Selasa</option>
					      <option value="Rabu">Rabu</option>
					      <option value="Kamis">Kamis</option>
					      <option value="Jumat">Jumat</option>
					      <option value="Sabtu">Sabtu</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="jam">Jam</label>
					    <input type="jam" class="form-control" id="jam" name="jam" >
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