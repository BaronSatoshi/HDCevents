@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf {{-- Diretiva para enviar o formulário csrf --}}
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="image" style="margin-bottom: 10px;">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="title" style="margin-bottom: 10px;">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="date" style="margin-bottom: 10px;">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date" >
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="title" style="margin-bottom: 10px;">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="title" style="margin-bottom: 10px;">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="title" style="margin-bottom: 10px;">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="title" style="margin-bottom: 10px;">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food"> Open Food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento" style="margin-bottom: 10px;">
  </form>
</div>

@endsection