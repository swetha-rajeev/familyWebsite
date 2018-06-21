@extends('main')

@section('content')
@include('_nav')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container posts">
<h1> Add a New Blog Post </h1>
<hr>
<form method ="post" action="{{route('posts.store')}}">
{{ csrf_field() }}

<div class="form-gropup form-content row">
	<label for="inputTtile" class="col-sm-2 col-form-label"> Title </label>
	 <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="inputTitle" placeholder="Enter Ttile" name = "title">
    </div>
</div>
<div class="form-gropup form-content row">
	<label for="inputSlug" class="col-sm-2 col-form-label"> Slug </label>
	 <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="inputSlug" placeholder="Enter Slug" value = "http://localhost:8000/posts/" name = "slug">
    </div>
</div>
<div class="form-gropup form-content row">
	<label for="inputContent" class="col-sm-2 col-form-label"> Body </label>
	 <div class="col-sm-10">
      <textarea class="form-control form-control-lg" id="inputContent" rows="4" name = "body"> </textarea>
    </div>
</div>
    <div class="row">
    	<div class="col-sm-2"> </div>
    	<div class = "col-sm-10">
           <input type ="submit" class="btn btn-default submit"> 
        </div>
     </div>
</form>
</div>
@endsection


@section('script')
 

<script type="text/javascript" src ="{{ asset('/js/familySite.js') }}""></script>

@endsection