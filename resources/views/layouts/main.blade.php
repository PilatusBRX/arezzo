<div class="container">
    <div class="row">
            <h4>Lista de contatos</h4>
    </div>
</div>

<div class="container">
<table class="responsive-table">
<thead>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Empresa</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
  </thead>

  <tbody>
      @foreach($contatos as $contato)
    <tr>
      <td>{{$contato->nome }}</td>
      <td>{{$contato->fone }}</td>
      <td>{{$contato->email }}</td>
      <td>{{$contato->empresa }}</td>
      <td><a title="edit"  href="{{route('admin.edit',$contato->id)}}"><i class="material-icons">edit</i></a></td>
      <td><a title="delete" onclick="return confirm('Quer realmente excluir o contato ?')"  href="{{route('destroy',$contato->id)}}"><i class="material-icons">delete</i></a></td>

    </tr>

    @endforeach
  </tbody>
</table>
</div>

<br><br>
<!--Pagination-->
<div class="container">
 {{ $contatos->links('vendor.pagination.materialize')}}
</div>


<br><br>
