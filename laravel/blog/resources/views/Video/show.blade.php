@extends('default')

@section('content')

<div class="row">
<script
  src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
  integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI="
  crossorigin="anonymous"></script>
  
		<section class="content">

			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-default">
					<div class="panel-heading">
				    		<h3 class="panel-title">{{$video->video_title}}</h3>
				 	</div>

					<div class="panel-body">
						<div class="table-container">
						<div class="video" style="text-align:center">
                        <video width="100%" controls>
                      
                        @if(!empty(stristr($video->video_url,'http')) || !empty(stristr($video->video_url,'https')) || !empty(stristr($video->video_url,'//')) )
                            @if(!empty(stristr($video->video_url,'youtube')))
                                <iframe width="100%"  src="{{$video->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @else
                                <source src="{{$video->video_url}}" type="video/mp4">
                            @endif;
                            
                        @else
                            <source src="{{ URL::asset('video/'.$video->video_url) }}" type="video/mp4">
                       
                        @endif;   
                      
                            Your browser does not support HTML5 video.
                            </video>
					
						</div>
						<div class="video">
						{{$video->description}}
						</div>
    		
			    			
			    		 <div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								
								<a href="{{ route('video.index') }}" class="btn btn-info btn-block" >Back</a>
							</div>	
							
					     </div>
			    		
						</div>
					</div>

				</div>
			</div>
		</section>

@endsection