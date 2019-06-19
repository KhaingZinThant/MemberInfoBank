@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Building List Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/app.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/bootstrap.min.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/dataTables.bootstrap.min.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/jquery.dataTables.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/dataTables.bootstrap4.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/font-awesome-4.7.0/css/font-awesome.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/fontawesome-5.8.2/fontawesome-free-5.8.2-web/css/fontawesome.min.css'))}}">
    
       
       
     <script type="text/javascript" src="{{(asset('js/app.js'))}}"></script>
      <script type="text/javascript" src="{{(asset('js/jquery.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/jquery.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/jquery.dataTables.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/dataTables.bootstrap.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/dataTables.bootstrap4.min.js'))}}"></script>
     <script type="text/javascript" src="{{(asset('js/bootstrap.min.js'))}}"></script>
        <script type="text/javascript" src="{{(asset('js/jquery.datatables.min.js'))}}"></script>
        <script type="text/javascript" src="{{(asset('js/jquery.validate.js'))}}"></script>
</head>
<body>
    
<div class="container">
    <h1><center>Building List Data</center></h1><br>
    <div class="pull-right">
   <a class="btn btn-success" href="{{route('buildingCN.create')}}" > Print </a>
     <a class="btn btn-success" href="javascript:void(0)" id="createNewBuilding"> Create New Building</a>
  </div>
     <div class="input-group mb-3" style="width: 20%">
                            <select name="batch" id="batch" class="custom-select col-md-6 ">
                                <option value="1">Batch 1</option>
                                <option value="2">Batch 2</option>
                                <option value="3">Batch 3</option>
                                <option value="4">Batch 4</option>
                                <option value="5">Batch 5</option>
                            </select>
                            <button class="btn btn-light col-md-1 ml-1"><i class="fa fa-plus"></i></button>
                        </div>
    <table class="table table-bordered  table-stripped table-hover data-table">
        <thead style="background-color: #e6e6e6">
            <tr>
               <th><input  id="example" type="checkbox"  ></th>
                <th>Id</th>
                <th>Name</th>
                <th>Remark</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
              <span id="form_result"></span>

                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="buildingId" id="buildingId">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="buildingDesc" name="buildingDesc" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                     <div class="form-group">

            <label for="active">Active:</label>

            <input type="checkbox" name="active"  id="active">
        </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Remark</label>
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
    
</body>
    
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
        ajax: "{{ route('buildingCN.index') }}",
        columns: [
            { className: "center",defaultContent: '<input type="checkbox">'},
            {data: 'buildingId', name: 'buildingId'},
            {data: 'buildingDesc', name: 'buildingDesc'},
            {data: 'remark', name: 'remark'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewBuilding').click(function () {
      $('#form_result').html('');

        $('#saveBtn').val("create-product");
        $('#buildingId').val('');
       
          $('#active').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Building");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editProduct', function () {
      var building_id = $(this).data('id');
      $('#form_result').html('');

      $.get("{{ route('buildingCN.index') }}" +'/' + building_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Building");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#buildingId').val(data.buildingId);
          $('#buildingDesc').val(data.buildingDesc);
          $('#active').val(data.active);
          $('#remark').val(data.remark);
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('buildingCN.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {


              html = '<div class="alert alert-success">' + data.success + '</div>';

               
             $('#productForm').trigger("reset");
            
               $('#form_result').html(html);

                setTimeout(function(){
    $('#ajaxModel').modal('hide');
     $('.data-table').DataTable().ajax.reload();
    },1000);

                table.draw();

          },
          error: function (data) {
              html = '<div class="alert alert-success">' + data.success + '</div>';

              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }

      });
    });
    
    $('body').on('click', '.deleteProduct', function () {
     
        var building_id = $(this).data("id");
        confirm("Are You sure want to delete !");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('buildingCN.store') }}"+'/'+building_id,

            success: function (data) {
                      confirm("Data deleted successfully.");
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>
</html>
@endsection