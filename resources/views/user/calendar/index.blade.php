@extends('layouts.appUser')
@section('title','Calendar - '.Auth::user()->name)
             

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.css">
<style>

       /*  body {
          margin: 40px 10px;
          padding: 0;
          font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
          font-size: 14px;
        } */
      
        #calendar {
          margin: 40px 10px;
          padding: 50;
          font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
          font-size: 14px;
          max-width: 900px;
          margin: 0 auto;
        }
      
      </style>

{{-- <link rel="stylesheet" type="text/css" href="{{asset('backend/css/core/main.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/daygrid/main.css')}}"/> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.3.1/main.css"/> --}}
@endpush


@section('content')
<div id="calendar"></div>
@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.js"></script>
{{-- <script type="text/javascript" src='backend/css/core/main.js'></script> --}}
{{-- <script src='backend/css/interaction/main.js'></script> --}}
{{-- <script type="text/javascript" src='backend/css/daygrid/main.js'></script> --}}

    <script> 
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });
    </script>
 
@endpush