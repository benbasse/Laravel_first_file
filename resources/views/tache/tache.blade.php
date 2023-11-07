@include('default')
<div class="container">
    <div class="">
        <h1>Listes des taches</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        @for ($i = 1; $i < 8; $i++)
            <div class="col col-12 col-md-3 my-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titre Tache</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Priorite : haute</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="#" class="card-link">Supprimer</a>
                        <a href="#" class="card-link">Modifier Taches</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
