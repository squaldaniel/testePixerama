@extends('bootstrap.model')
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('headscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@show
@section('body')
    <div class="container-fluid">
        <!-- container -->
        <form class="row g-3" method="POST" action="/clientes/update/{{$cliente->id}}" style="margin: 15px">
            <input type="hidden" name="id" value="{{$cliente->id}}">
            @csrf
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}" required>
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf  }}" required>
              </div>
              <div class="col-md-2">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{$cliente->nascimento}}" required>
              </div>
              <div class="col-md-2">
                <label for="cepinput" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cepinput" name="cep" value="{{$cliente->cep}}">
              </div>
                <div class="col-md-1">
                    <br>
                    <span class="btn btn-success" id="pegacep" style="margin:5px"> Buscar</span>
                </div>
              <div class="col-md-3">
                <label class="form-label">Sexo:</label>
                <div>
                    <label class="form-check-label" for="sexom">
                        Masculino:
                    </label>
                <input class="form-check-input" type="radio" id="sexom" name="sexo" {{$cliente->sexo == 'M'? 'checked': ''}} value="M">
                <label class="form-check-label" for="sexof">
                    Feminino:
                </label>
                <input class="form-check-input" type="radio" id="sexof" name="sexo" {{$cliente->sexo == 'F'? 'checked': ''}} value="F">
                </div>
              </div>
            <div class="col-4">
              <label for="rua" class="form-label">Rua:</label>
              <input type="text" class="form-control" id="rua" name="rua" value="{{$cliente->rua}}" required>
            </div>
            <div class="col-1">
              <label for="num_compl" class="form-label">Numero:</label>
              <input type="text" class="form-control" id="num_compl" name="num_compl" value="{{$cliente->num_compl}}" required>
            </div>
            <div class="col-md-2">
              <label for="cidade" class="form-label">Cidade:</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$cliente->cidade}}" required>
            </div>
            <div class="col-md-1">
              <label for="estado" class="form-label">Estado(UF)</label>
              <input type="text" class="form-control" id="estado" name="estado" value="{{$cliente->estado}}" required>
            </div>
            <div class="col-12">
              <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
          </form>
        <!-- container -->
    </div>
    <div id="oculta"></div>
@endsection
@section("footer")
    @include('bootstrap.footer')
@endsection
@section("footerscripts")
<script type="text/javascript">
$('#oculta').hide();
$('#cpf').mask('999.999.999-99');
$('#cepinput').mask('99999-999');
function getCep(cep){
    if(cep.length < 8){
        alert("Precisa de 8 digitos!");
        $("cepinput").focus();
        return false;
    } else {
        var url = 'https://viacep.com.br/ws/'+ cep +'/json/';
        $("#oculta").load(url, function(data)
            {
                var obj = jQuery.parseJSON(data);
                if (obj.erro !== undefined){
                    alert('O cep não consta no ViaCEP!');
                } else {
                    $("#bairro").val(obj.bairro);
                    $("#rua").val(obj.logradouro);
                    $("#estado").val(obj.uf);
                    $("#cidade").val(obj.localidade);
                }

            });
        };
    }
    $("#pegacep").click(function(){
	    var newcep = $("#cepinput").val().replace("-", "");
		getCep(newcep);
	})
</script>
@endsection
