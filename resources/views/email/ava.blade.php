Olá {{$associate->name}},  

@if ($associate->status == '1')
    agora és membro da associação dos Vitilindos de Angola 😉
@else($associate->status==0)
    foste desassociado como membro da associação dos Vitilindos de Angola.
@endif