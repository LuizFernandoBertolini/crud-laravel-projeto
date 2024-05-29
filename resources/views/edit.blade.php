@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Alteração Usuário</div>
  <div class="card-body">
      
      <form action="{{ url('usuarios/' .$usuarios->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$usuarios->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" value="{{$usuarios->nome}}" class="form-control"></br>
        <label>Nascimento</label></br>
        <input type="text" name="nascimento" id="nascimento" value="{{$usuarios->nascimento}}" class="form-control"></br>
        <label>CEP</label></br>
        <input type="text" name="cep" id="cep" value="{{$usuarios->cep}}" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="endereco" id="endereco" value="{{$usuarios->endereco}}" class="form-control"></br>
        <label>Número</label></br>
        <input type="text" name="numero" id="numero" value="{{$usuarios->numero}}" class="form-control"></br>
        <label>Bairro</label></br>
        <input type="text" name="bairro" id="bairro" value="{{$usuarios->bairro}}" class="form-control"></br>
        <label>Cidade</label></br>
        <input type="text" name="cidade" id="cidade" value="{{$usuarios->cidade}}" class="form-control"></br>
        <label>Estado</label></br>
        <input type="text" name="uf" id="uf" value="{{$usuarios->uf}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
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