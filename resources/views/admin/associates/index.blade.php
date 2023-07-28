@extends('layouts.app', [
'class' => '',
'elementActive' => 'associates'
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
                            <h3 class="mb-0">Associados</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    N.º
                                </th>
                                <th>
                                    Imagem
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telemóvel
                                </th>
                                <th>
                                    Morada
                                </th>
                                <th>
                                    Estado
                                </th>
                                <th class="text-right">
                                    Ação
                                </th>
                            </thead>
                            <tbody>
                                @foreach($associates as $associate)
                                <tr>
                                    <td>
                                        {{ ++$i }}
                                    </td>
                                    <td>
                                        <img src="/image/{{ $associate->image }}" width="100px">
                                    </td>
                                    <td>
                                        {{ $associate->name }}
                                    </td>
                                    <td>
                                        {{ $associate->email }}
                                    </td>
                                    <td>
                                        {{ $associate->phone }}
                                    </td>
                                    <td class="text-right">
                                        {{ $associate->adress }}
                                    </td>
                                    <td class="text-right">
                                        @if ($associate->status == '1')
                                        <p class="text-success">Associado</p>
                                        @else($associate->status==0)
                                        <p class="text-danger">Não Associado</p>
                                        @endif

                                    </td>
                                    <td nowrap>
                                        <form action="{{ route('associates.destroy',$associate->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <a class="btn btn-info" href="{{ route('associates.show',$associate->id) }}">Mostrar</a> -->

                                            <a class="btn btn-primary" title="Associciar" href="{{ route('associates.status.change',$associate->id) }}">@if ($associate->status == '1')
                                                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                                @else($associate->status==0)
                                                <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                                                @endif</a>



                                            <button type="submit" class="btn btn-danger confirm" title="Eliminar"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
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