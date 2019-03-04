@extends ('layout.app')

@section('title')
    DigiDog : objets connectés pour chien
@endsection



@section('content')
    <main>

        <!-- CAROUSEL-->
        <article>
            <div id="carouselaccueil" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="traceur.jpg" class="d-block w-100" alt="traceur">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </article>

        <!--TEXTE PRESENTATION-->
        <article class="container">
        <h2>VOTRE CHIEN AUSSI AIME LA TECHNOLOGIE !</h2>
        <p>DigiDog : un large choix d'objets connectés pour chien.
            Facilitez-vous la vie, et celle de votre compagnon à quatre pattes !</p>
        </article>

        <article class="container-fluid w-100 bg-info text-white">
            <div class="row"><h3>Vos Garanties</h3></div>
            <div class="row">
                <div class="col-3">
                    <p>100% made in France</p>
                </div>
                <div class="col-3">
                    <p>Livraison en 48h</p>
                </div>
                <div class="col-3">
                    <p>Garantie 2 ans</p>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row text-center">
                <h2>Catégories</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="traceur.jpg" alt="santé">
                </div>
                <div class="col-4">
                    <img src="DigiDog_/public/images/confort.jpg" alt="confort">
                </div>
            </div>
        </article>
    </main>
@endsection