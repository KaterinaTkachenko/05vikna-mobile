	<div class="form-group">
		{!! Form::label('status_id', 'Статус:') !!}
		{!! Form::select('status_id', $status, $lead->status_id, ['class'=>'form-control']) !!}
	</div>	
	
	<div class="form-group">
		{!! Form::label('page', 'Страница:') !!}
		{!! Form::text('page', null, ['class'=>'form-control']) !!}
	</div>
 
	<div class="form-group">
		{!! Form::label('widget', 'Виджет:') !!}
		{!! Form::text('widget', null, ['class'=>'form-control']) !!}
	</div>


	<div class="form-group">
		{!! Form::label('username', 'Имя клиента:') !!}
		{!! Form::text('username', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Телефон*:') !!}
		{!! Form::text('phone', null,  ['class'=>'form-control', 'id'=>'phone']) !!}
	</div>
<!-- 
	<div class="form-group">
		{!! Form::label('refer', 'Refer:') !!}
		{!! Form::text('refer', null, ['class'=>'form-control']) !!}
	</div> -->

	<div class="form-group">
		{!! Form::submit('Сохранить', ['class'=>'btn btn-primary', 'style'=>'width:10%']) !!}
		<a href="{{route('leads.index')}}" class="btn btn-secondary" style="width: 10%">Отмена</a>
	</div>