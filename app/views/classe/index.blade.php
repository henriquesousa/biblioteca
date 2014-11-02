
<div class="container">
	<div class="row">
		<h1>Classes</h1><hr>
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

			<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('classe/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
			<br/>
    		<div class="table-responsive">
				<table class="table table-striped table-hover table-list-search">
					<thead>
						<tr>
							<th>Id</th>
							<th>Série</th>
							<th>Turma</th>
							<th>Turno</th>
							<th width="300px" class="text-center">Ações</th>
						</tr>
					</thead>
					<tbody>
					@foreach($classe as $key => $value)
						<tr>
							<td> {{ $value->id}} </td>
							<td> {{ $value->serie}} </td>
							<td> {{ $value->turma}} </td>
							<td> {{ $value->turno}} </td>


							<!-- we will also add show, edit, and delete buttons -->
							<td class="text-center">
							
								<!-- delete the classe (uses the destroy method DESTROY /classe/{id} -->
								<!-- we will add this later since its a little more complicated than the other two buttons -->

								{{ Form::open(array('url' => 'classe/' . $value->id, 'class' => 'pull-right')) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('x', array('class' => 'btn btn-sm btn-danger')) }}
								{{ Form::close() }}

								<!-- show the classe (uses the show method found at GET /classe/{id} -->
								<a class="btn btn-sm btn-success pull-right" href="{{ URL::to('classe/' . $value->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>

								<!-- edit this classe (uses the edit method found at GET /classe/{id}/edit -->
								<a class="btn btn-sm btn-info pull-right" href="{{ URL::to('classe/' . $value->id . '/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
							
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div> 

			<smalll>Classes Cadastrados:</small> <b>{{ $quant }}</b>

		</div>


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