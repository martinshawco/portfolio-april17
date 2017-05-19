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
		<ul class="mainnav_menu">
			<li class="mn_m_item"><a href="#" class="current">All Work</a></li>
			<li class="mn_m_item"><a href="#">Client Projects</a></li>
			<li class="mn_m_item"><a href="#">University Assignments</a></li>
			<li class="mn_m_item"><a href="#">Experiments</a></li>
		</ul>
		<div class="mainnav_title">
			<a href="/" class="mn_t_linktohomepage">
				<img src="images/logo/logo_normal.png" alt="">
			</a>
		</div>
	</div>

	<div class="showcase_container">
		<ul class="showcase_menu">
			<li class="s_m_item">
				<div class="s_m_i_image containedcenter"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Employee Database System</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Naz Kebab House</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Naz Kebab House</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Naz Kebab House</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Employee Database System</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<div class="s_m_i_container">
					<h1 class="s_m_i_c_title">Test Project 1</h1>
					<p class="s_m_i_c_yearandtags">
						<span class="tag">Java</span>
						<span class="tag">C#</span>
					</p>
				</div>
			</li>
		</ul>
	</div>

	
@endsection