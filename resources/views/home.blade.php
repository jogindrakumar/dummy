@extends('frontend.master_home')
@section('main_content')

<!-- ABOUT -->
  @include('frontend.body.about')

    <!-- PROJECTS -->
   
@include('frontend.body.project')
    <!-- Technology and Stack -->
   @include('frontend.body.tech_stack')

    <!-- CONTACT -->
   @include('frontend.body.contact')
    @endsection