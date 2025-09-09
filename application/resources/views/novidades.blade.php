@extends ('template')

@section ('conteudos')

<h2>Cadastro de Novidades</h2>

<form action="{{route('novidades')}}" method="POST" class="d-flex">
    @csrf()
    <div class="form-floating mb-3 col-12 col-md-8">
      <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="seuemailaqui@exemplo.com" autocomplete="off" required>
      <label for="floatingInput">Seu E-mail preferido</label>
    </div>

    <button class="btn btn-dark ms-3">Cadastrar</button>
</form>

<table class="table table-dark table-striped table-hover table-bordered" style="width: 80%;">
    <thead>
        <tr>
            <th>#</th>
            <th>E-mail Cadastrado</th>
            <th>Aceite</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        {{-- Laço de Repetição (Loop) --}}
        @for($i = 1 ; $i < 11 ; $i++)
        <tr>
            <td>{{$i}}</td>
            <td>email@cadastro.com</td>
            <td>sim</td>
            <td>
                <a href="#" title="Editar o registro"><i class="bi bi-pencil-square" style="color: #FFFFFF; margin: 0 0.5rem;"></i></a> 
                <a href="#" title="Apagar o registro"><i class="bi bi-trash3" style="color: #FFFFFF; margin: 0 0.5rem;"></i></a>
            </td>
        </tr>
        @endfor
    </tbody>
</table>

@endsection