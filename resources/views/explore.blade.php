@extends('layouts.explore_layout')

@section('content')

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div>
            <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top:5%;">
                @include('courses.course_card')
                Test
            </div>

        </div>
    </div>

@endsection

