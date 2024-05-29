
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Manutenção de Usuários</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/usuarios/create') }}" class="btn btn-success btn-sm" title="novo usuarios">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo Usuário
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Nascimento</th>
                                        <th>CEP</th>
                                        <th>Endereço</th>
                                        <th>Número</th>
                                        <th>Bairro</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->nascimento }}</td>
                                        <td>{{ $item->cep }}</td>
                                        <td>{{ $item->endereco }}</td>
                                        <td>{{ $item->numero }}</td>
                                        <td>{{ $item->bairro }}</td>
                                        <td>{{ $item->cidade }}</td>
                                        <td>{{ $item->uf }}</td>
 
                                        <td>
                                            <a href="{{ url('/usuarios/' . $item->id) }}" title="View usuarios"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Visualizar</button></a>
                                            <a href="{{ url('/usuarios/' . $item->id . '/edit') }}" title="Edit Usuarios"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button></a>
 
                                            <form method="POST" action="{{ url('/usuarios' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Usuarios" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection