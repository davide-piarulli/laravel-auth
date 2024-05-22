@extends('layouts.admin')
@section('content')
  @include('admin.partials.content-header')

  @if (session('error'))
    <div class="alert alert-danger" role="alert">
      {{ session('error') }}
    </div>
  @endif

  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <!-- card prossimi progetti -->
  <div class="card my-4 mx-2">
    <div class="card-header">
      <h2>Progetti</h2>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome Progetto</th>
          <th scope="col">Link</th>
          <th scope="col">Tipo</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($projects as $project)
          <tr>
            <th scope="row"><input type="text" value="{{ $project->title }}" name="title"></th>
            <td><input type="text" value="{{ $project->link }}" name="link"></td>
            <td><input type="text" value="{{ $project->type }}" name="type"></td>
            <td><input type="text" value="{{ $project->description }}" name="description"></td>
            <td class="icons d-flex ">
              <form action="" method="POST">
                <button type="button" class="btn btn-warning">
                  <i class="fa-solid fa-pencil"></i>
                </button>
              </form>
              <form action="" method="post">
                <button type="button" class="btn btn-danger">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    <div class="paginator">
      {{ $projects->links() }}

    </div>

  </div>
@endsection
