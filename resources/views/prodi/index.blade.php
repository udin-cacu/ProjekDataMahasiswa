@extends ('layout.main')

@section ('title','Daftar Prodi')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h4 class="mt-3">Daftar Prodi</h4>

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm form-inline my-3" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Prodi
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
						<th scope="col">Kodi Prodi</th>
						<th scope="col">Nama Prodi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data_prodi as $prodi)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$prodi->kode_prodi}}</td>
						<td>{{$prodi->nama_prodi}}</td>
						<td>

						<a href="/prodi/{{$prodi->id}}/edit" class="badge badge-success btn-sm">Edit</a>
						<a href="/prodi/{{$prodi->id}}/delete" class="badge badge-danger btn-sm">Delete</a>

							
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
			        <form method="post" action="/prodi/create">
			        	@csrf
					  <div class="form-group">
					    <label for="kode_Prodi">Kode Prodi</label>
					    <input type="kode_Prodi" class="form-control" id="kode_Prodi" name="kode_Prodi" >
					  </div>
					  <div class="form-group">
					    <label for="nama_prodi">Nama Prodi</label>
					    <input type="nama_prodi" class="form-control" id="nama_prodi" name="nama_prodi" >
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