
	<div class="row text-center">
		<h1>Materiais</h1><hr>
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Pesquisar" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        

		<div class="col-md-9">

			<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('material/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
			<br/>
    		<div class="table-responsive">
				<table class="table table-striped table-hover table-list-search">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Número de Série</th>
							<th>Modelo</th>
							<th>Observação</th>
							<th width="200px" class="text-center">Ações</th>
						</tr>
					</thead>
					<tbody>
					@foreach($material as $key => $value)
						<tr>
							<td> {{ $value->id}} </td>
							<td> {{ $value->nome}} </td>
							<td> {{ $value->numero_serie}} </td>
							<td> {{ $value->modelo}} </td>
							<td> {{ $value->obs}} </td>


							<!-- we will also add show, edit, and delete buttons -->
							<td class="text-center">
							
								<!-- delete the material (uses the destroy method DESTROY /material/{id} -->
								<!-- we will add this later since its a little more complicated than the other two buttons -->

								{{ Form::open(array('url' => 'material/' . $value->id, 'class' => 'pull-right')) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('x', array('class' => 'btn btn-sm btn-danger')) }}
								{{ Form::close() }}

								<!-- show the material (uses the show method found at GET /material/{id} -->
								<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('material/' . $value->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>

								<!-- edit this material (uses the edit method found at GET /material/{id}/edit -->
								<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('material/' . $value->id . '/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>

							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div> 

			<smalll>Materiais cadastrados:</small> <b>{{ $quant }}</b>

		</div>


	</div>


<script type="text/javascript">
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Pesquisar por: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Registro não encontrado.</td></tr>');
        }
    });
});
</script>