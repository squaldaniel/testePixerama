@php $title = 'Login' @endphp
@extends('bootstrap.model')
@section('body')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5 alert alert-info">
          <div class="card-body p-4 p-sm-5">
            <img src="/img/Logo-Capital.png" height="50">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <hr class="my-4">
            <form action="/auth" method="POST">
                @csrf
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="mail" name="mail" required>
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="passwd" name="passwd" required>
                <label for="floatingPassword">Senha</label>
              </div>
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Entrar">
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
