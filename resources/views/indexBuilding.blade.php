
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



  <style type="text/css">


    body {
      background-color:#daedf1 ;
    }

    h1, button{
      font-family:Rockwell;
      color: #3c565d;
    }
    .data-table
    {
      background-color: #b3d1dc ;
    }

    .
  }
</style>

</style>
<script type="text/javascript" src="{{(asset('js/app.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/jquery.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/jquery.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/jquery.dataTables.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/dataTables.bootstrap.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/dataTables.bootstrap4.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/bootstrap.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/jquery.datatables.min.js'))}}"></script>
<script type="text/javascript" src="{{(asset('js/jquery.validate.js'))}}"></script>
<script type="text/javascript" src="{{(asset('buttons.print.min.js'))}}"></script>
</head>
<body>

  <div class="container">

    <!-- city list header -->
    <h1><center>Building List</center></h1><br>

    <!-- Print and Create New Button -->
    <div class="pull-right">
     <a class="btn btn-success" href="{{route('buildingCN.create')}}" > Print</a>

     <!-- Button to Open the Create New  City Modal -->
     <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New City</a>
   </div>


  <!-- Batch Number -->
   <div class="input-group mb-3" style="width: 20%">
    <select name="batch" id="batch" class="custom-select col-md-6 ">
      <option value="1">Batch 1</option>
      <option value="2">Batch 2</option>
      <option value="3">Batch 3</option>
      <option value="4">Batch 4</option>
      <option value="5">Batch 5</option>
    </select>
    <button class="btn btn-light "><i class="fa fa-plus"></i></button>
  </div>


    <!-- City Datatable -->
    <table class="table table-bordered  table-stripped table-hover data-table">
      <thead style="background-color: #e6e6e6">
        <tr>
         <th><input type="checkbox"  id="checkall"></th>
         <th>Building Id</th>
         <th>Building Name</th>
         <th>Remark</th>
         <th width="280px">Action</th>
       </tr>
     </thead>
     <tbody>
     </tbody>
   </table>
 </div>


<!-- City Modal Box -->
<div class="modal fade" id="ajaxModel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modelHeading"></h4>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form id="productForm" name="productForm" class="form-horizontal">
         <input type="hidden" name="buildingId" id="buildingId">
         <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Building Name</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" name="buildingDesc" placeholder="Enter Building Name" value="" maxlength="50" required="">
          </div>
        </div>
                    <!--  <div class="form-group">

            <label for="active">Active:</label>

            <input type="checkbox" name="active"  id="active">
          </div> -->

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

<!-- Delete ConfirmModal Box -->
<div id="confirmModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Confirm Modal Box header -->
      <div class="modal-header">
        <h2 class="modal-title text-center">Confirmation</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Confirm Modal Box body -->
      <div class="modal-body">
        <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
      </div>

      <!-- Confirm Modal Box footer -->
      <div class="modal-footer">
       <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
      bSort: false,
      ajax: "{{ route('buildingCN.index') }}",

      columns: [
      { className: 'center',defaultContent: '<input type="checkbox" class="checkbox">'},
      {data: 'buildingId', name: 'buildingId'},
      {data: 'buildingDesc', name: 'buildingDesc'},
      {data: 'remark', name: 'remark'},
      {data: 'action', name: 'action', orderable: false, searchable: false},
      ]

    });


// Checkbox select all
$("#checkall").click(function () {
  if (this.checked) {
    $(".checkbox").each(function () {
      this.checked = true;
    });
  } else {
    $(".checkbox").each(function () {
      this.checked = false;
    });
  }
}
);


$('#createNewProduct').click(function () {
  $('#form_result').html('');

  $('#saveBtn').val("create-product");
  $('#buildingId').val('');


  $('#productForm').trigger("reset");
  $('#modelHeading').html("Create New Building");
  $('#ajaxModel').modal('show');
});

// Edit button action
$('body').on('click', '.editProduct', function () {
  var product_id = $(this).data('id');
  $('#form_result').html('');

  $.get("{{ route('buildingCN.index') }}" +'/' + product_id +'/edit', function (data) {
    $('#modelHeading').html("Edit Product");
    $('#saveBtn').val("edit-user");
    $('#ajaxModel').modal('show');
    $('#buildingId').val(data.buildingId);
    $('#name').val(data.buildingDesc);
    $('#active').val(data.active);
    $('#remark').val(data.remark);
  })
});


// Save Button Action
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


// Delete Button Action
$('body').on('click', '.deleteProduct', function () {

  var product_id = $(this).data("id");
  $('#confirmModal').modal('show');
  $('#ok_button').text('Delete');
  $('#ok_button').click(function(){
    $.ajax({
      type: "DELETE",
      url: "{{ route('buildingCN.store') }}"+'/'+product_id,
      beforeSend:function(){
        $('#ok_button').text('Deleting...');
      },

      success: function (data) {
        setTimeout(function(){
         $('#confirmModal').modal('hide');
         $('.data-table').DataTable().ajax.reload();
       }, 300);

        table.draw();
      },
      error: function (data) {
        console.log('Error:', data);
      }
    });
  });
});


});

</script>
</html>
@endsection