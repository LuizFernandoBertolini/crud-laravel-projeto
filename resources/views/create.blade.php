@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Cadastro de Usuários</div>
  <div class="card-body">
      
      <form action="{{ url('usuarios') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" class="form-control"></br>
        <label>Nascimento</label></br>
        <input type="text" name="nascimento" id="nascimento" class="form-control"></br>
        <label>CEP</label></br>
        <input type="text" name="cep" id="cep" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="endereco" id="endereco" class="form-control"></br>
        <label>Número</label></br>
        <input type="text" name="numero" id="numero" class="form-control"></br>
        <label>Bairro</label></br>
        <input type="text" name="bairro" id="bairro" class="form-control"></br>
        <label>Cidade</label></br>
        <input type="text" name="cidade" id="cidade" class="form-control"></br>
        <label>Estado</label></br>
        <input type="text" name="uf" id="uf" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cep').on('blur', function() {
            let cep = $(this).val().replace(/\D/g, '');
            if (cep != "") {
                $.ajax({
                    url: `/api/cep/${cep}`,
                    method: 'GET',
                    success: function(data) {
                        if (!("erro" in data)) {
                            $('#endereco').val(data.logradouro);
                            $('#bairro').val(data.bairro);
                            $('#cidade').val(data.localidade);
                            $('#uf').val(data.uf);
                        } else {
                            alert('CEP não encontrado.');
                        }
                    },
                    error: function() {
                        alert('Erro ao buscar CEP.');
                    }
                });
            }
        });
    });
</script>

@stop
