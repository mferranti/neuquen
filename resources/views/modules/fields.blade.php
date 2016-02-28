<!--- Name Field --->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Anesthesia Field --->
<div class="form-group col-sm-6">
    {!! Form::label('anesthesia', 'Anesthesia:') !!}
    {!! Form::text('anesthesia', null, ['class' => 'form-control']) !!}
</div>

<!--- Duration Field --->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::number('duration', null, ['class' => 'form-control']) !!}
</div>

<!--- Price Field --->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!--- Additional Field --->
<div class="form-group col-sm-6">
    {!! Form::label('additional', 'Additional:') !!}
    {!! Form::number('additional', null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modules.index') !!}" class="btn btn-default">Cancel</a>
</div>
