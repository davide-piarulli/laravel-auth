<div class="content-header">
  <div class="row text-white d-flex h-100 align-content-center ">

    <div class="col-6 ">
      <div class="p-3">
        <h3 class="d-inline">Boolpress</h3>
      </div>
    </div>

    <div class="col-3 d-flex align-content-center h-100 py-3">
      <p>Nuovo Progetto</p>
      <button class="dp-btn btn-primary" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="fa-solid fa-plus"></i>
      </button>

      <!-- offcanvas -->
      <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Inserisci un nuovo progetto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo Progetto</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="link" class="form-label">Link</label>
                  <input type="text" class="form-control" id="link" name="link">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="type" class="form-label">Tipo</label>
                  <input type="text" class="form-control" id="type" name="type">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione</label>
                  <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
            <button type="reset" class="btn btn-warning">Svuota</button>
          </form>
        </div>
      </div>

    </div>
  </div>


</div>
