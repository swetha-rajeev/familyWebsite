@extends('main')

@section('content')
@include('_nav')
<div class="container accordian">
	 <button class="btn accordianButton"> Post </button>
	 	<ul class="accordianList is-open">
	 		<li> Create Post </li>
	 		<li> Delete Post </li>
	 		<li> Edit Post </li>
	 	</ul>
	 <!-- </div> -->
	 <button class="btn accordianButton"> Videos </button>
	 	<ul class="accordianList is-open">
	 		<li> Post Videos </li>
	 		<li> Delete Videos </li>
	 	</ul>

</div>
@endsection

@section('script')
 

<script type="text/javascript" src ="{{ asset('/js/familySite.js') }}""></script>

@endsection

