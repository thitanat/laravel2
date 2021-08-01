<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $categories->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $categories->description }}</p>
</div>

<!-- View Count Field -->
<div class="col-sm-12">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $categories->view_count }}</p>
</div>

