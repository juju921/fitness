{!! Form::open(['route'=>'salle.store', 'files'=>true]) !!}


<div class="form-group {{$errors->has('nom')? 'has-error' : '' }}">
    {!! Form::label('titre', 'nom:', ['for'=> 'nom'] ) !!}<br>
    {!! Form::text('title',old('nom'), ['class'=>'form-control', 'id' => 'nom', 'required']) !!}
    {!! $errors->first('nom', '<span class="help-block">:message</span>') !!}
</div>




{!! Form::close() !!}