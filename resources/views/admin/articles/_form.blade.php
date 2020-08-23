	<div class="form-group">
		{!! Form::label('name', 'Название:') !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>		

	<div class="form-group">
		{!! Form::label('slug', 'Слаг:') !!}
		{!! Form::text('slug', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('date', 'Дата вывода:') !!}
		{!! Form::date('date', null, ['class'=>'form-control', 'min'=>'2020-01-01']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('metaKeywords', 'Meta Keywords:') !!}
		{!! Form::text('metaKeywords', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('metaTitle', 'Meta Title:') !!}
		{!! Form::text('metaTitle', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('metaDesc', 'Meta Description:') !!}
		{!! Form::text('metaDesc', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('shortDesc', 'Краткое описание:') !!}
		{!! Form::textarea('shortDesc', null, ['class'=>'form-control']) !!}
	</div>

	{!! Form::label('img', 'Изображение:') !!}
	@if ($article->img)
		<div>
			<img id="holder" style="width: 80px; height: 80px; " src="{{$article->img}}" class="thumbnail">
		</div>
		<div>
			<a href="#" class="remove-img">Удалить</a>
			<input type="hidden" name="removeImg">
		</div>
	@endif

	<div class="input-group">
	   <span class="input-group-btn">
	     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
	       <i class="fa fa-picture-o"></i> Выбрать
	     </a>
	   </span>
	   <input id="thumbnail" class="form-control" type="text" name="img">
	</div>
	<br>
	
	<div class="form-group">
		{!! Form::label('alt', 'Аlt:') !!}
		{!! Form::text('alt', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fullDesc', 'Полное описание::') !!}
		{!! Form::textarea('fullDesc', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('display', 'Вывод:') !!}
		{!! Form::checkbox('display', $article->display, null, ['style'=>'width: 40px; height: 20px;']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Сохранить', ['class'=>'btn btn-primary', 'style'=>'width: 10%']) !!}
		<a href="{{route('articles.index')}}" class="btn btn-secondary" style="width: 10%">Отмена</a>
	</div>