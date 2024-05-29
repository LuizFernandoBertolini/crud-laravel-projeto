
@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Usuários</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $usuarios->nome }}</h5>
        <p class="card-text">Nascimento : {{ $usuarios->nascimento }}</p>
        <p class="card-text">CEP : {{ $usuarios->cep }}</p>
        <p class="card-text">Endereço : {{ $usuarios->endereco }}</p>
        <p class="card-text">Número : {{ $usuarios->numero }}</p>
        <p class="card-text">Bairro : {{ $usuarios->bairro }}</p>
        <p class="card-text">Cidade : {{ $usuarios->cidade }}</p>
        <p class="card-text">Estado : {{ $usuarios->uf }}</p>

        
  </div>
       
    </hr>
  
  </div>
</div>