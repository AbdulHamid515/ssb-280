@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
	    <i class="icon ion-ios-home-outline"></i>
	    <div>
	      <h4>Update Slider</h4>
	      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
	    </div>
	</div>

	<div class="br-pagebody">
		<div class="row row-sm">
		  <div class="col-sm-12 col-xl-12">
		  	<!-- Body Content Start -->
		  	<div class="card bd-0 shadow-base">
			      <div class="d-md-flex justify-content-between pd-25">
			        <div>
			          <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Slider</h6>
			        </div>
			      </div>

			      <div class="pd-l-25 pd-r-15 pd-b-25">
			      	
			      	<form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
			      		<!-- This is the Security Tocken + No one can Embad this Form using iframe tag -->
			      		@csrf 

			      		<div class="form-group">
			      			<label>Slider Title</label>
			      			<input type="text" name="title" class="form-control" value="{{$slider->title}}">
			      		</div>
						<div class="form-group">
			      			<label>Slider Subtitle</label>
			      			<input type="text" name="subtitle" class="form-control" value="{{$slider->subtitle}}">
			      		</div>
			      		<div class="form-group">
			      			<label>Slider Description</label>
			      			<input type="text" class="form-control" name="description"  value="{{$slider->description}}">
			      		</div>
			      		<div class="form-group">
			      			<label>Slider Button Tex</label>
			      			<input type="text" name="buttion_text" class="form-control" value="{{$slider->buttion_text}}">
			      		</div>
			      		<div class="form-group">
			      			<label>Slider Button URL</label>
			      			<input type="text" name="buttion_url" class="form-control" value="{{$slider->buttion_url}}">
			      		</div>
			      	

			      		<div class="form-group">
			      			<label>Slider Image</label>
			      			<input type="file" class="form-control-file" name="image" > 
			      		</div>

			      		<div class="form-group">
			      			<input type="submit" name="updateSlider" class="btn btn-primary" value="Save Changes">
			      		</div>
			      	</form>
			      	
			      </div>
			    </div>
		  	<!-- Body Content End -->
		  </div>
		</div>
	</div>


@endsection