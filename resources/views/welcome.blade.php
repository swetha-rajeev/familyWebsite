@extends('main')

    @section('title', '| Home page')

    @section('styles')
        <!-- FullCalendar stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    @endsection

    @section('content')
    @include('_nav')
    <!-- Creating Full width Jumbotron -->

    <div class = "jumbotron my-jumbotron">
        <div class = "container">
           <!--<img src="images/family.jpg" alt="family picture" >-->
           <h1 style="z-index:20">We and Our Journey !!</h1>
         </div>
     </div>

     
    
    <div class="row main">
         <div class="col-md-3 calendar">
             <div class="panel panel-default">
                <!-- <div class="panel-heading"><h1>Full Calendar </h1></div> -->

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
          <div class="col-md-9">
          
            </div>
          
        </div>
    </div>

     
      

    @endsection

    @section('script')
    <script type="text/javascript" src ="{{ asset('/js/familySite.js') }}""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
    @endsection
