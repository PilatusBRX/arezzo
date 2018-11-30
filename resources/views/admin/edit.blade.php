
@include('layouts.header')

<!--formulário-->
<div class="container">
<div class="row">
    <h4>Editar contato</h4><br><br>
    <form class="col s12" method="POST" action="{{ route('update',['id'=>$contato->id])}}">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input value="{{$contato->nome}}" name="nome" type="text" class="validate">
                    <label for="icon_prefix">Nome</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input value="{{$contato->fone}}" name="fone" type="tel" class="validate">
                    <label for="icon_telephone1">Telefone</label>
                </div>


                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input value="{{$contato->email}}" name="email" type="text" class="validate">
                        <label for="icon_prefix2">E-mail</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">supervisor_account</i>
                        <input value="{{$contato->empresa}}" name="empresa" type="tel" class="validate">
                        <label for="icon_telephone2">Empresa</label>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn btn-add btn-edit"><i class="material-icons left">add</i>Atualizar Contato</button>
                @csrf
         </form>

    </div>
</div>
@include('layouts.footer')
