<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'User Account Id:') !!}
    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    {!! Form::text('paid_date', null, ['class' => 'form-control','id'=>'paid_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#paid_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    {!! Form::text('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expiry_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::text('plan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Paid Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_amount', 'Paid Amount:') !!}
    {!! Form::number('paid_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>
