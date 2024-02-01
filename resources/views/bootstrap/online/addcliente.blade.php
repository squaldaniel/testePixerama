@extends('bootstrap.model')
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('body')
    <div class="container-fluid">
        <!-- container -->
        <form class="row g-3" method="POST" action="/clientes/add" style="margin: 15px">
            @csrf
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
              </div>
              <div class="col-md-2">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
              </div>
              <div class="col-md-2">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep">

              </div>
                <div class="col-md-1">
                    <br>
                    <button class="btn btn-success" style="margin:5px"> Buscar</button>
                </div>
              <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Sexo:</label>
                <div>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino:
                    </label>
                <input class="form-check-input" type="radio" name="sexo" value="M">
                <label class="form-check-label" for="flexRadioDefault1">
                    Feminino:
                </label>
                <input class="form-check-input" type="radio" name="sexo" value="F">
                </div>
              </div>
            <div class="col-4">
              <label for="inputAddress" class="form-label">Rua:</label>
              <input type="text" class="form-control" id="rua" name="rua" required>
            </div>
            <div class="col-1">
              <label for="num_compl" class="form-label">Numero:</label>
              <input type="text" class="form-control" id="num_compl" name="num_compl" required>
            </div>
            <div class="col-md-2">
              <label for="cidade" class="form-label">Cidade:</label>
              <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="col-md-1">
              <label for="estado" class="form-label">Estado(UF)</label>
              <input type="text" class="form-control" id="estado" name="estado" required>
            </div>
            <div class="col-12">
              <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
          </form>
        <!-- container -->
    </div>
@endsection
@section("footer")
    @include('bootstrap.footer')
@endsection
