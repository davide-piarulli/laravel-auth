@extends('layouts.admin')
@section('content')
  <!-- content header -->
  <!-- /content header -->
  <div class="container">
    @include('admin.partials.content-header')

    @include('projects.partials.projects')
  </div>
@endsection
