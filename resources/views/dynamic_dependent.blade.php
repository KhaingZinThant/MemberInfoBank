<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Dynamic Dropdown in Laravel</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
	<style type="text/css">
		.box{
			width: 600px;
			margin: 0 auto;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<br />
	<div class="container box">
		<h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
		<form method="post" id="insert_data">
		<div class="form-group">
		<select name="country" id="country" class="form-control action">
			<option value="">Select Country</option>
			@foreach($country_list as $country)
			<option value="{{$country->country}}">
			{{ $country->country }}
			</option>
			@endforeach
		</select>
	</div>
	<br />
	<div class="form-group">
		<select name="state" id="state" class="form-control action">
			<option value="">Select State</option>
		</select>
	</div>
	<br>
	<div class="form-group">
		<select name="city" id="city" class="form-control input-lg">
			<option value="">Select City</option>
		</select>
	</div>
	 {{ csrf_field() }} 
	<br>
</div>
</body>
</html>

<!-- <script>
	$(document).ready(function(){
		$('.dynamic').change(function(){
			if($(this).val != '')
			{
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent');
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url:"{{route('dynamicdependent.fetch') }}", 
					method: "POST",
					data:{select:select, value:value, _token:_token, dependent:dependent},
					success:function(result)
					{
						$('#', dependent).html(result);
					}

				})
			}

		});
		
	});
</script> -->
<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>