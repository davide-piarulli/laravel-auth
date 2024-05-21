<div class="content-header">
  <div class="row text-white d-flex h-100 align-content-center ">

    <div class="col-6 ">
      <div class="p-3">
        <h3 class="d-inline">Boolpress</h3>
        {{-- <span class="chip">Piano blaze</span> --}}
      </div>
      {{-- <div class="p-3">
        <span class="chip">3 app</span>
        <i class="fa-solid fa-angles-right"></i>
        <span class="chip d-none d-lg-inline-block">Boolean mobile app</span>
        <span class="chip d-none d-lg-inline-block">Boolean web app</span>
        <span class="chip d-none d-lg-inline-block">Boolean blog app</span>
        <span class="chip d-lg-block d-xl-none ">+</span>
      </div> --}}
    </div>

    {{-- <div class="col-3">
      <div class="p-3">
        <p>Studenti online negli ultimi 30 minuti</p>
        <p class="online-users">125</p>
      </div>
    </div> --}}

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
          <form>

            <div class="row">
              <div class="col-8">
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome">
                </div>
              </div>
              <div class="col-4">
                <div class="mb-3">
                  <label for="cognome" class="form-label">Cognome</label>
                  <input type="text" class="form-control" id="cognome">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
              </div>
              <div class="col-4">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="indirizzo" class="form-label">Indirizzo</label>
              <input type="text" class="form-control" id="indirizzo">
            </div>

            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="citta" class="form-label">Città</label>
                  <input type="text" class="form-control" id="citta">
                </div>
              </div>
              <div class="col-4">
                <label for="stato" class="form-label">Stato</label>
                <div class="dropdown mb-3">
                  <button class="btn border border-1 bg-white dropdown-toggle w-100 " type="button"
                    data-bs-toggle="dropdown" aria-expanded="false" id="stato">
                    Scegli..
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Italia</a></li>
                    <li><a class="dropdown-item" href="#">Spagna</a></li>
                    <li><a class="dropdown-item" href="#">Regno Unito</a></li>
                  </ul>

                </div>
              </div>
              <div class="col-2">
                <div class="mb-3">
                  <label for="cap" class="form-label">CAP</label>
                  <input type="text" class="form-control" id="cap">
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="text" class="form-control" id="foto" placeholder="Nessun file selezionato">
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Seleziona per proseguire</label>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-warning">Svuota</button>
          </form>
        </div>
      </div>

    </div>
  </div>


</div>
