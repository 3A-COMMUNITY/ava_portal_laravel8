@extends('layouts.app', [
'class' => '',
'elementActive' => 'news_create'
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
              <h3 class="mb-0">Posts - {{$post->id}}</h3>
            </div>
          </div>
        </div>

        <div class="card-body">
          <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="form-group col-md-4">
                <label>Título</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}"/>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Categoria</label>
                <select id="inputState" class="form-control" name="category_id">
                  <option selected>Escolha...</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}" @if($category->id==$post->postCategory->id) selected @endif>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-4">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
                <label class="custom-file-label" for="validatedCustomFile">Imagem de capa</label>
              </div>

            </div>

            <div class="form-group">
              <label><strong>Descrição :</strong></label>
              <textarea class="ckeditor form-control" name="description">{!!$post->description!!}</textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary btn-sm">Atualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.ckeditor').ckeditor();
  });
</script>
@endpush