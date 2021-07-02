@extends('layouts.template')
@section('content')

<div class="container" style="padding-bottom:50px;">
    <table class="table table-striped table-hover" id="latihan-table">
        <thead>
            <tr>
                <th>Nama Latihan</th>
                <th>Jenis Latihan</th>
                <th>Min</th>
                <th>Max</th>
                <th>Video</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
         </thead>
    </table>
</div>

<script src="{{asset('js/jquery-3.5.1.min.js')}}" ></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>
<script>
    $(document).ready(function(){
		$('#latihan-table').DataTable({
            "ajax": {
            "url": "{{url('/latihan')}}",
            "dataSrc": ""    
        },
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Create',
                    action: function ( e, dt, node, config ) {
                        window.location = "{{url('/create2')}}";
                    }
                }
            ],
			columns: [
				{ data: 'nama_latihan', name: 'nama_latihan' },
				{ data: 'jenis_latihan', name: 'jenis_latihan', orderable: false },
				{ data: 'min', name: 'min', orderable: false },
				{ data: 'max', name: 'max', orderable: false },
				{ data: 'video', name: 'video', orderable: false },
                { data: 'gambar', name: 'gambar', orderable: false },
                { data: 'action', name: 'action', orderable: false }
			]
		});
	});
</script>



@endsection