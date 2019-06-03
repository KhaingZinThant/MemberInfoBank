@extends('layout')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
<h2 style="text-align: center;">View List</h2>
<a style="float: right" href="/" class="btn btn-success">Add New Room</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Room Name</th>
                <th>Active</th>
                <th>Remark</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
		<tbody>
		</tbody>
	</table>
</div>
	<!-- @foreach($roomVar as $room)
	<tr>
		<td><input type="checkbox" name="select"></td>
		<td>{{$room->roomDesc}}</td>
		<td>{{$room->active}}</td>
		<td>{{$room->remark}}</td>
		<td><a href="{{route('roomCN.edit',$room->roomId)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
		<td><form action="{{route('roomCN.destroy', $room->roomId)}}" method="Post">
			@csrf
			@method('DELETE')
			<button class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-trash"></i></button>
			</form>
		</td>
	</tr>
	</tbody>
@endforeach
</table> -->
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="roomId" id="roomId">
                    <div class="form-group">
                        <label for="roomDesc" class="col-sm-2 control-label">Room Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="roomDesc" name="roomDesc" placeholder="Enter Room Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Details</label>
                        <div class="col-sm-12">
                            <textarea id="remark" name="remark" required="" placeholder="Enter Details" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('roomCN.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'roomDesc', name: 'roomDesc'},
            {data: 'active', name: 'active'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewRoom').click(function () {
        $('#saveBtn').val("create-room");
        $('#roomId').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Room");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editProduct', function () {
      var roomId = $(this).data('roomId');
      $.get("{{ route('roomCN.index') }}" +'/' + roomId +'/edit', function (data) {
          $('#modelHeading').html("Edit Room");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#roomId').val(data.roomId);
          $('#roomDesc').val(data.roomDesc);
          $('#remark').val(data.remark);
      })
   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('ajaxproducts.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    $('body').on('click', '.deleteProduct', function () {
        var roomId = $(this).data("roomId");
        confirm("Are You sure want to delete !");
        $.ajax({
            type: "DELETE",
            url: "{{ route('roomCN.store') }}"+'/'+roomId,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
  });
</script>
@endsection

