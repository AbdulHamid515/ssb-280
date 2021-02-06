 <script src="{{asset('Frontend/assets/js/jquery-1.11.1.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/bootstrap-hover-dropdown.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/echo.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/jquery.easing-1.3.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/bootstrap-slider.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/jquery.rateit.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('Frontend/assets/js/lightbox.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/bootstrap-select.min.js')}}"></script> 
<script src="{{asset('Frontend/assets/js/wow.min.js')}}"></script> 
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('Frontend/assets/js/scripts.js')}}"></script>
<script type="text/javascript">
	@if (Session::has('massege') )
	var type = "{{Session::get('alert-type','info')}}";

	switch(type)
	{
		case 'info':
		toastr.info("{{Session::get('massege')}}");
		break;

		case'success':
		toastr.success("{{Session::get('massege')}}");

		break;
		case'warning':
		toastr.warning("{{Session::get('massege')}}");

		break;
		case'error':
		toastr.error("{{Session::get('massege')}}");

		break;
	}
	@endif
</script>
<script type="text/javascript">
	toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "2000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>
