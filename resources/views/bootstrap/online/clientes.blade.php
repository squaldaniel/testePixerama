@extends('bootstrap.model')
@section('headscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section('body')
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td><td>E-mail</td><td>CPF</td><td>Nasc.</td><td>CEP</td><td>Sexo</td><td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{strtolower($cliente->email)}}</td>
                    <td class="cpfmask">{{$cliente->cpf}}</td>
                    <td>{{Carbon\Carbon::parse($cliente->nascimento)->format('d/m/Y') }} </td>
                    <td class="cepmask">{{$cliente->cep}}</td>
                    <td>{{$cliente->sexo}}</td>
                    <td>
                        <a class="btn btn-primary" href="clientes/edit/{{$cliente->id}}"><span class="fa fa-pencil"></span></button>
                        <a class="btn btn-danger" onclick="confirmAndRedirect(event, 'deseja realmente executar esta ação?', 'clientes/del/{{$cliente->id}}')" href="clientes/del/{{$cliente->id}}"><span class="fa fa-trash"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  {{ $clientes->links(null, ["Next"=>"proximo"]) }}
</div>
@endsection

@section('footerscripts')
<script type="text/javascript">
    $('.cpfmask').mask('999.999.999-99');
    $('.cepmask').mask('99999-999');
    function confirmAndRedirect(event, message, url) {
        event.preventDefault();
        if (confirm(message)) {
            window.location.href = url;
        } else {
            return false;
        }
    }
</script>
@endsection
