<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<style>
    :root {
    --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #515151;
    text-align: left;
    background-color: #e9edf4;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

a {
    color: #3f84fc;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #0458eb;
    text-decoration: underline;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Nunito", sans-serif;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
    font-weight: normal;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0;
}

.card-body {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    text-align: center;
}

.dashboard {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
}

.dashboard-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    margin-top: 84px;
}

.dashboard-content {
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    padding: 25px;
}

.dashboard-nav {
    min-width: 238px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    overflow: auto;
    background-color: #373193;
}

.dashboard-compact .dashboard-nav {
    display: none;
}

.dashboard-nav header {
    min-height: 84px;
    padding: 8px 27px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.dashboard-nav header .menu-toggle {
    display: none;
    margin-right: auto;
}

.dashboard-nav a {
    color: #515151;
}

.dashboard-nav a:hover {
    text-decoration: none;
}

.dashboard-nav {
    background-color: #023429;
}

.dashboard-nav a {
    color: #fff;
}

.brand-logo {
    font-family: "Nunito", sans-serif;
    font-weight: bold;
    font-size: 20px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #515151;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.brand-logo:focus, .brand-logo:active, .brand-logo:hover {
    color: #dbdbdb;
    text-decoration: none;
}

.brand-logo i {
    color: #d2d1d1;
    font-size: 27px;
    margin-right: 10px;
}

.dashboard-nav-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-item {
    min-height: 56px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 0.02em;
    transition: ease-out 0.5s;
}

.dashboard-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px;
}

.dashboard-nav-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.active {
    background: rgba(0, 0, 0, 0.1);
}



.dashboard-nav-dropdown.show {
    background: rgba(255, 255, 255, 0.04);
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle {
    font-weight: bold;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle:after {
    -webkit-transform: none;
    -o-transform: none;
    transform: none;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.dashboard-nav-dropdown-toggle:after {
    content: "";
    margin-left: auto;
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid rgba(81, 81, 81, 0.8);
    -webkit-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

.dashboard-nav .dashboard-nav-dropdown-toggle:after {
    border-top-color: rgba(255, 255, 255, 0.72);
}

.dashboard-nav-dropdown-menu {
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-dropdown-item {
    min-height: 40px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    transition: ease-out 0.5s;
}

.dashboard-nav-dropdown-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.menu-toggle {
    position: relative;
    width: 42px;
    height: 42px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #443ea2;
}

.menu-toggle:hover, .menu-toggle:active, .menu-toggle:focus {
    text-decoration: none;
    color: #875de5;
}

.menu-toggle i {
    font-size: 20px;
}

.dashboard-toolbar {
    min-height: 84px;
    background-color: #dfdfdf;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 8px 27px;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
}

.nav-item-divider {
    height: 1px;
    margin: 1rem 0;
    overflow: hidden;
    background-color: rgba(236, 238, 239, 0.3);
}

@media (min-width: 992px) {
    .dashboard-app {
        margin-left: 238px;
    }

    .dashboard-compact .dashboard-app {
        margin-left: 0;
    }
}


@media (max-width: 768px) {
    .dashboard-content {
        padding: 15px 0px;
    }
}

@media (max-width: 992px) {
    .dashboard-nav {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1070;
    }

    .dashboard-nav.mobile-show {
        display: block;
    }
}

@media (max-width: 992px) {
    .dashboard-nav header .menu-toggle {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

@media (min-width: 992px) {
    .dashboard-toolbar {
        left: 238px;
    }

    .dashboard-compact .dashboard-toolbar {
        left: 0;
    }
}
</style>


<div  class='dashboard'>

    <div  class='dashboard-app'>

        <div style="margin-top: -5%" class='dashboard-content'>
            <div style="margin-left:-10%"  class="row">
                <div class="col-md-12">
                    <form action="">
                        <input type="hidden" value="0" >
                        <button style="background-color:#f8c717; color:white" class="btn btn-warning" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1"></path>
                             </svg> Retour sur back office
                        </button>
                    </form>
                </div>
            </div>
            <div style="margin-left:-10%" class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div style="text-align: left;" class="card-header">
                          Ajout d'un nouveaux formulaire
                        </div>
                        <div style="
                            background:
                                url({{URL::asset('/img/1234.png')}})
                                top center / 300px 300px

                                padding-box
                                content-box
                                ;

                            " class="card-body">

                          <p class="card-text">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#descriptionFormulaire" data-bs-whatever="@mdo">Déscription du formulaire</button>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#creationTitre" data-bs-whatever="@fat">Ajouter un titre pour le formulaire</button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#creationSousTitre" data-bs-whatever="@getbootstrap">Ajouter un sous titre </button>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#poserQuestion" data-bs-whatever="@mdo">Poser une question</button>

                            {{-- CREATION DE LA DESCRIPTION --}}
                            <div class="modal fade" id="descriptionFormulaire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvel déscription...</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form method="POST" action="#" >
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Titre :</label>
                                            <input required name="titre_description" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Déscription:</label>
                                            <textarea name="description" class="form-control" id="message-text"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button value="0" name="newDescription" type="submit" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                                             </svg>
                                            Enregistrez
                                        </button>
                                    </div>
                                </form>
                                </div>
                              </div>
                            </div>



                             {{-- CREATION D'UN TITRE --}}
                            <div class="modal fade" id="creationTitre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau titre...</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="#" >
                                      @csrf
                                      <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Selectionnez un titre :</label>
                                                <select style="text-transform: uppercase" name="id_qc" id="select-state" placeholder="Pick a state...">
                                                    <option value="">Selectionnez le questionnaire...</option>
                                                    @forelse ($tbl_questionnaire as $value )
                                                        <option  value="{{ $value->id }}">{{ $value->titre }}</option>
                                                    @empty
                                                        {{ 'empty' }}
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Titre :</label>
                                                <input required name="titres" type="text" class="form-control" id="recipient-name">
                                            </div>

                                      </div>
                                      <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M18 6l-12 12"></path>
                                                    <path d="M6 6l12 12"></path>
                                                 </svg>
                                                Fermer
                                            </button>
                                            <button value="0" name="newTitre" type="submit" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                 </svg>
                                                Enregistrez
                                            </button>
                                      </div>
                                  </form>
                                  </div>
                                </div>
                            </div>

                             {{-- CREATION D'UN SOUS TITRE --}}
                             <div class="modal fade" id="creationSousTitre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau sous titre...</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="#" >
                                      @csrf
                                      <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Selectionnez un titre :</label>
                                            <select name="id_sous_titre" id="select-state" placeholder="Pick a state...">
                                                <option value="">Selectionnez un titre...</option>
                                                @forelse ($tbl_titre as $value )
                                                    <option value="{{ $value->id }}">{{ $value->titre }}</option>
                                                @empty
                                                    {{ 'empty' }}
                                                @endforelse
                                              </select>
                                        </div>
                                          <div class="mb-3">
                                              <label for="recipient-name" class="col-form-label">Sous-tire :</label>
                                              <input required name="sous_titre" type="text" class="form-control" id="recipient-name">
                                          </div>

                                      </div>
                                      <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M18 6l-12 12"></path>
                                                    <path d="M6 6l12 12"></path>
                                                 </svg>
                                                Fermer
                                            </button>
                                            <button value="0" name="newSousTitre" type="submit" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                 </svg>
                                                Enregistrez
                                            </button>
                                      </div>
                                  </form>
                                  </div>
                                </div>
                            </div>

                            {{-- CREATION DES QUESTIONS --}}
                            <div class="modal fade" id="poserQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle question...</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="#" >
                                      @csrf
                                      <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Selectionnez un titre :</label>
                                            <select name="id_sous_titre" id="select-state" placeholder="Pick a state...">
                                                <option value="">Selectionnez le sous titre...</option>
                                                @forelse ($tbl_sous_titre as $value )
                                                    <option value="{{ $value->id }}">{{ $value->titre }}</option>
                                                @empty
                                                    {{ 'vide' }}
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Quelle est la question ?</label>
                                            <input required name="question" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Type de réponse :</label>
                                            <select name="type_questionnaire" id="select-state" placeholder="Pick a state...">
                                                <option value="null">-</option>
                                                <option value="0">OUI/NON</option>
                                                <option value="1">TEXT/COURT</option>
                                                <option value="2">TEXT/LONG</option>
                                                <option value="3">CHOIX MULTIPLE</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Nombre de fois :</label>
                                            <input min="1"  required value="1" name="nbfois" type="number" class="form-control" id="recipient-name">
                                        </div>

                                      </div>
                                      <div class="modal-footer">

                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M18 6l-12 12"></path>
                                                    <path d="M6 6l12 12"></path>
                                                 </svg>
                                                Fermer
                                            </button>

                                            <button value="0" name="newQuestionnaire" type="submit" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                 </svg>
                                                Enregistrez
                                            </button>
                                      </div>
                                  </form>
                                  </div>
                                </div>
                            </div>
                          </p>

                        @if($affiche==0)
                            <div class="row">
                                @foreach ($tbl_questionnaire as $qc_value)
                                    <div style="padding:0.5%" class="col-md-3">
                                        <div class="card">
                                            <h5 style="font-size:12px; font-weight:bold;" class="card-header">{{ 'Formulaire : '.$qc_value->id }}</h5>
                                            <div class="card-body">
                                                <h5 style="font-size:14px; font-weight:bolder; text-transform:uppercase; color:#c10027" class="card-title">{{ substr($qc_value->titre,0,30) }}</h5>
                                                <p style="font-family:'Times New Roman', Times, serif" class="card-text">{{ substr($qc_value->description,0,100) }}</p>
                                                <button style="background-color: #1e8c56"   class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                                 </svg> plus de détails </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else()
                            <form id="frmComment" method="POST" action="{{ route('add-formulaire') }}">
                                @csrf
                                @foreach ($tbl_questionnaire as $qc_value)
                                <div  style="font-family:'Times New Roman', Times, serif" class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <h2 class="text-center" >
                                            {{ $qc_value->titre }}
                                            <input name="id_qc" type="hidden" value="{{ $qc_value->id }}" >
                                            <!-- Inline level -->
                                        </h2>
                                        <p  class="text-center fs-5 fst-italic">
                                            {{ $qc_value->description }}
                                        </p>
                                    </div>
                                </div>

                                <div style="font-family:'Times New Roman', Times, serif; font-weight:bold; text-align:left" class="row">
                                    <div class="col-md-12">
                                        <ol type="I" >
                                            @foreach($tbl_titre as $value)
                                                @if($value->id_qc== $qc_value->id)
                                                    <li>
                                                        {{ $value->titre }}
                                                        @foreach ($tbl_sous_titre as $items )
                                                            <ol>
                                                                @if($value->id==$items->id_titre)
                                                                    <li>
                                                                        {{ $items->titre }}
                                                                        @foreach ($tbl_items_qc as $items_qc )
                                                                            @if($items->id==$items_qc->id_sous_titre)
                                                                                <p>{{ $items_qc->titre }}</p>
                                                                                <?php
                                                                                    $type='none';
                                                                                    if($items_qc->type==0){
                                                                                        if($items_qc->nombre<=1){
                                                                                            echo '
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input checked class="form-check-input" type="radio" name="items1" id="inlineRadio1" checked value="OUI">
                                                                                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                                                                </div>

                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="items1" id="inlineRadio2" value="NON">
                                                                                                    <label class="form-check-label" for="inlineRadio2">Non</label>
                                                                                                </div>
                                                                                            ';
                                                                                        }else{
                                                                                            for($i=0;$i<($items_qc->nombre);$i++){
                                                                                                echo '
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" type="radio" name="items1" id="inlineRadio2" value="NON">
                                                                                                        <label class="form-check-label" for="inlineRadio2">
                                                                                                            <input style="border:none;" type="text" class="from-control" name="radio'.$i.'" placeholder="Entre le label N° '.($i+1).'" >
                                                                                                        </label>
                                                                                                    </div>
                                                                                                ';
                                                                                            }
                                                                                        }
                                                                                    }

                                                                                    if($items_qc->type==1){
                                                                                        if($items_qc->nombre==1){
                                                                                            echo '
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input checked class="form-check-input" type="text" id="inlineRadio1">
                                                                                                </div>
                                                                                            ';
                                                                                        }
                                                                                    }

                                                                                    if($items_qc->type==2){
                                                                                        if($items_qc->nombre==1){
                                                                                            echo '
                                                                                                <div class="input-group">
                                                                                                    <textarea class="form-control" type="text" id="vous"></textarea>
                                                                                                </div>
                                                                                            ';
                                                                                        }
                                                                                    }
                                                                                    if($items_qc->type==3){
                                                                                        for($i=0;$i<($items_qc->nombre);$i++){
                                                                                                 echo'
                                                                                                    <div class="form-check">
                                                                                                        <label class="form-ccountheck-label" for="flexChec1">
                                                                                                            <input value="'.$items_qc->id.'" name="id_valuer" type="hidden">
                                                                                                            <input style="border:none;" type="text" class="from-control" name="check'.$i.''.$items_qc->id.'" placeholder="Entre le label N° '.($i+1).'" >
                                                                                                        </label>
                                                                                                        <input class="form-check-input" type="checkbox"  id="flexChec1" >
                                                                                                    </div>
                                                                                                ';


                                                                                        }
                                                                                    }
                                                                                ?>

                                                                            @endif
                                                                        @endforeach
                                                                    </li>
                                                                @endif
                                                            </ol>
                                                        @endforeach
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ol>
                                    </div>

                            @endforeach
                            @endif

                            <hr>
                            <div  class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">

                                    <button @if($affiche==0) {{ "disabled" }} @endif name="newFormulaire" value="1" onclick="return confirm('confirmer vous la validation du formulaire...?')" class="btn btn-success" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-browser-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M4 8h16"></path>
                                        <path d="M8 4v4"></path>
                                        <path d="M9.5 14.5l1.5 1.5l3 -3"></path>
                                     </svg> Valider le formulaire</button>

                                     <input name="id_formulaire" @if(isset($qc_value->id)) value="{{ $qc_value->id }}" @endif type="hidden">
                                     <button @if($affiche==0) {{ "disabled" }}  @endif value="12" name="delFormulaire" onclick="return confirm('voulez-vous annullez le formulaire...?')" class="btn btn-danger" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                         </svg> Supprimer le formulaire</button>
                                </div>
                            </div>





                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

@isset($ajax)

<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Créatio de formulaire !",
            text: "Le formulaire que vous avez soumis à été créer avec success...",
            icon: "success",
            button: "Ok",
            timer: 15000
        });
    });
</script>

@endisset

<script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});
$(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
