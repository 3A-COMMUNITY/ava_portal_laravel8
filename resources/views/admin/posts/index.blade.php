@extends('layouts.app', [
'class' => '',
'elementActive' => 'news_index'
])

@section('content')
@include('sweetalert::alert')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Posts</h3>
            </div>
          </div>
        </div>

        <div class="card-body">

          <div class="table-responsive text-center">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  N.º
                </th>
                <th>
                  Imagem
                </th>
                <th>
                  Título
                </th>
                <th>
                  Categoria
                </th>
                <th>
                  Descrição
                </th>
                <th class="">
                  Ação
                </th>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>
                    {{ ++$i }}
                  </td>
                  <td>
                    <img src="/image/{{ $post->image }}" width="100px">
                  </td>
                  <td>
                    {{ $post->title }}
                  </td>
                  <td>
                    {{ $post->postCategory->name }}
                  </td>
                  <td class="text-center">
                    {!! Str::limit($post->description, 35, ' ...') !!}
                  </td>

                  <td nowrap>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                      @csrf
                      @method('DELETE')
                      <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-pencil-square-o fa-2x"></i></a>


                      <button type="submit" class="btn btn-danger confirm"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                    </form>
                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('paper') }}/js/datatable.min.js"></script>
<script src="../../vendor/sweetalert/sweetalert.all.js"></script>

<script>
  $(document).ready(function() {

    $('.table').DataTable({
      "pageLength": 5,
      "bJQueryUI": true,
      "oLanguage": {
        "sProcessing": "Processando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "Não foram encontrados resultados",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
        "sInfoFiltered": "",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "oPaginate": {
          "sFirst": "Primeiro",
          "sPrevious": "Anterior",
          "sNext": "Seguinte",
          "sLast": "Último"
        }
      }
    });
  });
</script>

<script>
  //the confirm class that is being used in the delete button
  $('.confirm').click(function(event) {

    //This will choose the closest form to the button
    var form = $(this).closest("form");

    //don't let the form submit yet
    event.preventDefault();

    //configure sweetalert alert as you wish
    Swal.fire({
      title: 'Tem certeza que pretende eliminar?',
      text: "",
      cancelButtonText: "Não",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, eliminar'
    }).then((result) => {

      //in case of deletion confirm then make the form submit
      if (result.isConfirmed) {
        form.submit();
      }
    })
  });
</script>
@endpush