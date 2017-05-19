@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/index.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/index.js') }}"></script>
@endsection


@section('content')
	<div class="mainnav_container">
		<ul class="mainnav_menu">
			<li class="mn_m_item"><a href="#" class="current">All Work</a></li>
			<li class="mn_m_item"><a href="#">Client Projects</a></li>
			<li class="mn_m_item"><a href="#">University Assignments</a></li>
			<li class="mn_m_item"><a href="#">Experiments</a></li>
		</ul>
		<div class="mainnav_title">
			<a href="/" class="mn_t_linktohomepage">
				Martin Shaw
			</a>
		</div>
	</div>

	<div class="showcase_container">
		<ul class="showcase_menu">
			<li class="s_m_item">
				<div class="s_m_i_image containedcenter"></div>
				<h1 class="s_m_i_title">Naz Kebab House</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<h1 class="s_m_i_title">Employee Database System</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<h1 class="s_m_i_title">Test Project 1</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<h1 class="s_m_i_title">Naz Kebab House</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<h1 class="s_m_i_title">Employee Database System</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
			<li class="s_m_item">
				<div class="s_m_i_image"></div>
				<h1 class="s_m_i_title">Test Project 1</h1>
				<p class="s_m_i_yearandtags">2017<span class="tag">java</span><span class="tag">c#</span></p>
			</li>
		</ul>
	</div>

	
@endsection