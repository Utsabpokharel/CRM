<script>

	$(document).ready(function(){
		let tableId='#'+$('.table').attr('id')
		$(tableId).DataTable({
			responsive: false,

		});
		@if(session('success'))
			swal(
				'Success',
				'{!! session('success') !!}',
				'success'
			);
		@endif
		@if(session('warning'))
			swal(
				'Warning',
				'{!! session('warning') !!}',
				'warning'
			);
		@endif
		$('.deleteData').on('click',function(){
        	let deleteFunction = $(this).attr('rel1');
			swal({
				title: "Are You Sure? ",
                text: "You will not be able to recover this record again",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Delete it!"
			},function(){
					window.location.href=deleteFunction;
				 //let url window.location.href = deleteFunction;

				
			});
		});
	});
		


</script>