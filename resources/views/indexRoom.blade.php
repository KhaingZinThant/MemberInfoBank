@extends('layout')
@section('content')
   
<div class="container">
<h2 style="text-align: center;">View List</h2>
<a style="float: right" href="/" class="btn btn-success" id="createNewRoom">Add New Room</a>
    <table class="table table-bordered data-table" id="example">
        <thead>
            <tr>
                <th></th>
                <th>Room Name</th>
                <th>Active</th>
                <th>Remark</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
		<tbody>
       @foreach($roomVar as $room)
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
  @endforeach
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
<script>

$(document).ready(function(){
   var table = $('#example').DataTable({
      'ajax': 'https://api.myjson.com/bins/1us28',
      'columnDefs': [
         {
            'targets': 0,
            'render': function(data, type, row, meta){
               if(type === 'display'){
                  data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
               }

               return data;
            },
            'checkboxes': {
               'selectRow': true,
               'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
            }
         }
      ],
      'select': 'multi',
      'order': [[1, 'asc']]
   });
});
</script>
@endsection

