<!-- card prossimi progetti -->
<div class="card my-4 mx-2">
  <div class="card-header">
    <h2>Progetti</h2>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nome Progetto</th>
        <th scope="col">Data inizio</th>
        <th scope="col">ROI</th>
        <th scope="col">Stato</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="w-50 "><img src="assets/img/class-avatar.jpg" alt="">Classe 75</td>
        <td>15 Feb 2021</td>
        <td>20%</td>
        <td>
          <span class="badge text-bg-success">Done</span>
        </td>
        <td class="icons">
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-pencil"></i>
          </button>
          <button type="button" class="btn btn-secondary">
            <i class="fa-solid fa-trash-can"></i>
          </button>
        </td>
      </tr>
      {{-- @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $project->title }}</th>
            <td>{{ $project->link }}</td>
            <td>{{ $project->type }}</td>
            <td>{{ $project->description }}</td>
          </tr>
        @endforeach --}}



    </tbody>
  </table>
  {{-- <div class="paginator">
      {{ $projects->links() }}

    </div> --}}

</div>
<!-- /card prossime classi -->
