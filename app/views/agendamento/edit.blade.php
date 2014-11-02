
<div class="jumbotron">

<!-- if there are creation errors, they will show here -->
<div class="alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>

	{{ Form::open([
      "route" => ["agendamento.update", $agendamento->id],
      "autocomplete" => "on",
      "class" => "form-horizontal",
      "method" => "PUT"
    ]) }}

  <input type="hidden" name="id" value="{{ $agendamento->id }}">
    <fieldset>
      <h1>Editar agendamento</h1>
      <hr>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="material">Material:</label>
        <div class="col-sm-9">

          <div class="input-group">

        <select name="material_id" class="form-control">
        <option value="{{ $agendamento->material->id }}">{{ $agendamento->material->nome }}</option>
        @foreach ($materiais as $material)
          <option value="{{ $material->id }}">{{ $material->nome }}</option>
        @endforeach
        </select>

        <div class="input-group-btn">
              <a class="btn btn-sm btn-success pull-right" href="{{ URL::to('material/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
              </div>
      </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="saida">Saída:</label>
        <div class="col-sm-9">
          {{ Form::text('saida', isset($agendamento->saida) ? date('d/m/Y', strtotime($agendamento->saida)) : date('d/m/Y', strtotime(Input::old('saida'))), array('class' => 'form-control data')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="entrega">Entrega:</label>
        <div class="col-sm-9">
          {{ Form::text('entrega', isset($agendamento->entrega) ? date('d/m/Y', strtotime($agendamento->entrega)) : date('d/m/Y', strtotime(Input::old('entrega'))), array('class' => 'form-control data')) }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="professor">Professor:</label>
        <div class="col-sm-9">

          <div class="input-group">

            <select name="professor_id" class="form-control">
            <option value="{{ $agendamento->professor->id }}">{{ $agendamento->professor->nome }}</option>
            @foreach ($professores as $professor)
              <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
            @endforeach
            </select>

            <div class="input-group-btn">
                  <a class="btn btn-sm btn-success pull-right" href="{{ URL::to('professor/create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
            </div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="turno">Turno:</label>
        <div class="col-sm-9">

          <div class="input-group">

            <select name="turno" class="form-control">
              <option value="{{ $agendamento->turno }}">{{ $agendamento->turno }}</option>
              <option value="Matutino">Matutino...</option>
              <option value="Noturno">Noturno...</option>
              <option value="Vespertino">Vespertino...</option>
            </select>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="horario">Horário:</label>
        <div class="col-sm-9">

          <div class="input-group">

            <select name="horario" class="form-control">
              <option value="{{ $agendamento->horario }}">{{ $agendamento->horario }}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            
            </select>

          </div>

        </div>
      </div>

    </fieldset>

      <!-- edit this agendamento (uses the edit method found at GET /agendamento/{id}/edit -->
      <a class="btn btn-sm btn-success" href="{{ URL::to('agendamento') }}">Voltar</a>

      {{ Form::reset('Limpar!', array('class' => 'btn btn-sm btn-danger')) }}
      {{ Form::submit('Cadastrar!', array('class' => 'btn btn-sm btn-primary')) }}

  {{ Form::close() }}
</div>