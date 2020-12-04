<script>

	$(document).ready(function(){
		let tableId='#'+$('.table').attr('id')
		$(tableId).DataTable({
			responsive: false,

		});
		$('.form-group').each(function(){
			let inputClass=$(this).find('.is-invalid');
			let errormessage=$(this).find('.invalid-feedback');
			if(inputClass)
			{
				inputClass.on('keyup',function(){
					$(this).removeClass('is-invalid');
					$(errormessage).remove();

				}).on('change',function(){
					$(this).removeClass('is-invalid');
					$(errormessage).remove();

				});
			}
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