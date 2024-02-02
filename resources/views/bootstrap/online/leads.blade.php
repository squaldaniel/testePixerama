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
                <td>Nome Lead</td><td>E-mail</td><td>Assunto</td><td>Plano</td><td>Mensagem</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr>
                    <td>{{strtolower($lead->name)}}</td>
                    <td>{{strtolower($lead->email)}}</td>
                    <td>{{strtolower($lead->subject)}}</td>
                    <td>{{strtolower($lead->plan)}}</td>
                    <td>{{strtolower($lead->message)}}</td>
                    <td>
                        <a class="btn btn-success"
                        href="leads/convert/{{$lead->id}}"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Transformar {{$lead->name}} em cliente.">
                        <span class="fa fa-check"></span></button>
                        <a class="btn btn-danger" onclick="confirmAndRedirect(event, 'deseja realmente executar esta ação?', 'leads/del/{{$lead->id}}')" href="clientes/del/{{$lead->id}}"><span class="fa fa-trash"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  {{ $leads->links(null, ["Next"=>"proximo"]) }}
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
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection
