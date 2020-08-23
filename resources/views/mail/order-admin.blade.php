<table style="border-collapse: collapse; border: 1px solid black;">
	<thead>
		<tr>
			<th style="border: 1px solid black; padding: 15px; text-align: left; background-color: #6c757d; color: #FFF;font-weight: bold;" colspan="2">Заявка # {{$lead->id}}</th>
		</tr>
	</thead>
	<tbody>
		@if($request['username'])
			<tr>
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Клиент:</td>
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['username']}}</td>
			</tr>
		@endif	
		<tr>
			<td style="border: 1px solid black; padding: 15px; text-align: left;">Телефон:</td>
			<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['phone']}}</td>
		</tr>
		@if($request['select1'] != 'undefined' && isset($request['select1']))
			<tr>
				<td rowspan = "2" style="border: 1px solid black; padding: 15px; text-align: left;">Что рассчитать:</td>
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['select1']}}</td>				
			</tr>
			<tr>
				<td style = "border: 1px solid black; padding: 15px; text-align: left;">{{$request['sectionCount']}}</td>
			</tr>
			<tr>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Секции:</td>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['section1']}}</td>
			</tr>
			@if($request['section2'] && $request['section2'] != 'undefined')
				<tr>
					<td style="border: 1px solid black; padding: 15px; text-align: left;"></td>	
					<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['section2']}}</td>
				</tr>
			@endif
			@if($request['section3'] && $request['section3'] != 'undefined')
				<tr>
					<td style="border: 1px solid black; padding: 15px; text-align: left;"></td>	
					<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['section3']}}</td>
				</tr>
			@endif
			@if($request['section4'] && $request['section4'] != 'undefined')
				<tr>
					<td style="border: 1px solid black; padding: 15px; text-align: left;"></td>	
					<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['section4']}}</td>
				</tr>
			@endif
			<tr>		
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Тип профиля:</td>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['select2']}}</td>
			</tr>
			<tr>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Стеклопакет:</td>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['select3']}}</td>
			</tr>
			<tr>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Ширина подоконника:</td>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['select4']}}</td>
			</tr>
			<tr>	
				<td style="border: 1px solid black; padding: 15px; text-align: left;">Ширина отлива:</td>		
				<td style="border: 1px solid black; padding: 15px; text-align: left;">{{$request['select5']}}</td>
			</tr>			
		@endif
	</tbody>
</table>
{{-- <a href="https://photopresent.com.ua/admin/orders/{{$order->id}}/edit">Ссылка на заказ в админке</a> --}}