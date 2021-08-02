@extends('layouts.explore_layout')

@section('content')
<h1 style="padding-top:5%">Recommended Course</h1>
<div class="content px-3" style="width:100%">

    @include('flash::message')

    <div class="clearfix"></div>

    <div>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="padding-top :5%;">
            @include('courses.course_card')
        </div>

    </div>
</div>

</div>
@endsection