@extends ('layout.app')

@section('title')
    DigiDog : objets connectés pour chien
@endsection



@section('content')
    <main class="container">

        <!-- CAROUSEL-->
        <article>
            <div id="carouselaccueil" class="carousel slide pb-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("images/distributeur.jpg") }}" class="d-block w-100" alt="distributeur">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/chien1.jpg") }}" class="d-block w-100" alt="traceur">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/chien2.jpg") }}" class="d-block w-100" alt="capteur">
                    </div>
                </div>
            </div>
        </article>

        <!--TEXTE PRESENTATION-->
        <article class="text-center no-gutters">
            <h3>VOTRE CHIEN AUSSI AIME LA TECHNOLOGIE !</h3>
            <div id="description">
                <p id="textedigidog">DigiDog : un large choix d'objets connectés pour chien.<br>
                    Facilitez-vous la vie, et celle de votre compagnon à quatre pattes !</p>
            </div>
        </article>

        <article id="garanties" class=" container-fluid w-100% text-white mt-3 mb-3">
            <div class="row justify-content-center"><h2 id="vosgaranties">Vos Garanties</h2>
            </div>
            <div class="row text-center pl-4">
                <div class="col-4">
                    <img class="picto" src="{{ asset("images/coq.png")}}">
                    <p>100% made in France</p>
                </div>
                <div class="col-4">
                    <img class="picto" src="{{ asset("images/camion.png")}}">
                    <p>Livraison en 48h</p>
                </div>
                <div class="col-4">
                    <img class="picto" src="{{ asset("images/cle.png") }}">
                    <p>Garantie 2 ans</p>
                </div>
            </div>
        </article>

        <article class="container-fluid mb-4">
            <div class="row justify-content-center">
                <h2>Catégories</h2>
            </div>
            <div class="ligneimagescat categories row container no-gutters">
                <div class="col-6">
                    <img class="imagescategories" src="{{ asset("images/chiendansleau.jpg") }}" alt="chiendansleau">
                    <div class="nomscategories"><h4>Traceurs GPS</h4></div>
                </div>
                <div class="col-6">
                    <img class="imagescategories" src="{{ asset("images/chiencanape.jpg") }}" alt="chiencanape">
                    <div class="nomscategories"><h4>Caméras connectées</h4></div>
                </div>
            </div>
            <div class="ligneimagescat categories row container  no-gutters mt-2">
                <div class="col-6">
                    <img class="imagescategories" src="{{ asset("images/chienquicourt.jpg") }}" alt="chienquicourt">
                    <div class="nomscategories"><h4>Capteurs d'activité</h4></div>
                </div>
                <div class="col-6">
                    <img class="imagescategories" src="{{ asset("images/chiencouchersoleil.jpg") }}" alt="chiencouchersoleil">
                    <div class="nomscategories"><h4>Distributeurs connectés</h4></div>
                </div>
            </div>
        </article>
        <article class="meilleuresventes container-fluid mb-4">
            <div class="row justify-content-center">
                <h2> Meilleures ventes</h2>
                <div class="row">
                    <div class="col-3 text-center">
                        <img class="imagesventes" src="{{ asset("images/capteur-activite.jpg") }}">
                        <h4>Boitier connecté</h4>
                    </div>
                    <div class="col-3 text-center">
                        <img class="imagesventes" src="{{ asset("images/tour-connectee.jpg") }}">
                        <h4>Tour connectée</h4>
                    </div>
                    <div class="col-3 text-center">
                        <img class="imagesventes" src="{{ asset("images/traceurtractive.jpg") }}">
                        <h4>Traceur GPS</h4>
                    </div>
                    <div class="col-3 text-center">
                        <img class="imagesventes" src="{{ asset("images/capteur.jpg") }}">
                        <h4>Capteur d'activité</h4>
                    </div>
                </div>
        </article>
        <article class="avisclients">
            <div class="row justify-content-center">
                <h2> Avis Clients</h2>
            </div>
            <div class="row text-center">
                <div class="col-4">
                    <h5 class="nomclient">Robertdu26</h5>
                    <p>Absolument génial, j'ai pris le capteur d'activité et je suis ravi de mon achat !</p>
                </div>
                <div class="col-4">
                    <h5 class="nomclient">Jean-Paul1975</h5>
                    <p>Le meilleur site pour faire plaisir à nos petits toutous</p>
                </div>
                <div class="col-4">
                    <h5 class="nomclient">Isabellelaplusbelle</h5>
                    <p>Livraison rapide, produits fonctionnels, je recommande !</p>
                </div>
            </div>
        </article>
    </main>
@endsection