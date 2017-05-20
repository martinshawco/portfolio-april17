@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/index.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/index.js') }}"></script>
@endsection


@section('content')
	<div class="splashscreen_container">
		<div class="splashscreen">
			<div class="ss_logo">
				@component('components.logo')
				@endcomponent
			</div>
			<div class="ss_tagline">
				Experienced Software Engineer &amp; Web Developer building complex client projects of all types &amp; sizes.
				<b>I'm currently seeking a 12-month Industrial Placement</b>
			</div>
		</div>
	</div>

	<div class="mainnav_container">
		<div class="mainnav_title">
			<a href="/" class="mn_t_linktohomepage">
				<img src="images/logo/logo_normal.png" alt="">
			</a>
		</div>
		<ul class="mainnav_menu">
			<li class="mn_m_item"><a target="_blank" href="https://www.linkedin.com/in/martin-shaw-13935b106/"><i class="fa fa-linkedin"></i></a></li>
			<li class="mn_m_item"><a target="_blank" href="https://www.behance.net/repmartinshaw"><i class="fa fa-behance"></i></a></li>
			<li class="mn_m_item"><a target="_blank" href="http://github.com/martinshaw"><i class="fa fa-github"></i></a></li>
			<li class="mn_m_item cv"><a target="_blank" href="/static/cv.pdf">Curriculum Vitae</a></li>
		</ul>
	</div>

	<div class="showcase_container">
		<ul class="showcase_menu">

			<?php $projects = \App\Project::orderBy('updated_at', 'asc')->get(); ?>

			@foreach ($projects as $proj)
			    
				<li class="s_m_item">
					<div class="s_m_i_image @if($proj->thumbnail_containcenter == true) containedcenter @endif" style="background-image: url('{{$proj->thumbnail_path}}');"></div>
					<div class="s_m_i_container">
						<h1 class="s_m_i_c_title">{{$proj->name}}</h1>
						<p class="s_m_i_c_yearandtags">
							@foreach (explode(",", $proj->tags) as $tag)
								<span class="tag">{{$tag}}</span>
							@endforeach
							
						</p>
					</div>
				</li>

			@endforeach

		</ul>
	</div>

	
@endsection