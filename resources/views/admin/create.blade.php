
@include('layouts.header')

<!--formulário-->
<div class="container create">
    <h3 style="font-weight: 300; font-size: 38px;">Adicionar contato</h3><br>
    <a href="/"class="waves-effect waves-light btn btn-add" ><i class="material-icons left">home</i>Voltar</a>

<div class="row">
    <form class="col s12" method="POST" action="{{route('store')}}">
            <div class="row">
                <div class="input-field col m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="nome" type="text" class="validate" required>
                    <label for="icon_prefix">Nome</label>
                </div>
                <div class="input-field col m12 l6">
                    <i class="material-icons prefix">phone</i>
                    <input name="fone" type="tel" class="validate" required>
                    <label for="icon_telephone1">Telefone</label>
                </div>


                    <div class="input-field col m12 l6">
                        <i class="material-icons prefix">mail</i>
                        <input name="email" type="text" class="validate" required>
                        <label for="icon_prefix2">E-mail</label>
                    </div>
                    <div class="input-field col m12 l6">
                        <i class="material-icons prefix">supervisor_account</i>
                        <input name="empresa" type="tel" class="validate" required>
                        <label for="icon_telephone2">Empresa</label>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn btn-add"><i class="material-icons left">add</i>Adicionar Contato</button>
                @csrf
         </form>

    </div>
</div>
@include('layouts.footer')
