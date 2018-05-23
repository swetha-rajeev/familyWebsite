@extends('main')

    @section('title', '| Home page')

    @section('content')
    @include('_nav')
    <!-- Creating Full width Jumbotron -->

    <div class = "jumbotron my-jumbotron">
        <div class = "container">
           <!--<img src="images/family.jpg" alt="family picture" >-->
           <h1 style="z-index:20">We and Our Journey !!</h1>
         </div>
     </div>

    @endsection

    @section('script')
    <script type="text/javascript" src ="{{ asset('/js/familySite.js') }}""></script>
    @endsection
