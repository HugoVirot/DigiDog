@extends ('layout.app')

@section('title')
    DigiDog : objets connectés pour chien
@endsection



@section('content')
    <main>

        <!-- CAROUSEL-->
        <article>
            <div id="carouselaccueil" class="carousel slide pt-3 pb-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/distributeur.jpg" class="d-block w-100" alt="traceur">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/traceur.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/sante.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </article>

        <!--TEXTE PRESENTATION-->
        <article class="container text-center">
        <h3>VOTRE CHIEN AUSSI AIME LA TECHNOLOGIE !</h3>
        <p id="textedigidog">DigiDog : un large choix d'objets connectés pour chien.
            Facilitez-vous la vie, et celle de votre compagnon à quatre pattes !</p>
        </article>

        <article id="garanties" class=" container-fluid w-100% text-white mt-3 mb-3">
            <div class="row justify-content-center"><h2>Vos Garanties</h2>
            </div>
            <div class="row justify-content-center pl-4">
                <div class="col-offset-1 col-3">
                    <img class="picto" src="/images/coq.png">
                    <p>100% made in France</p>
                </div>
                <div class="col-offset-1 col-3">
                    <img class="picto" src="/images/camion.png">
                    <p>Livraison en 48h</p>
                </div>
                <div class="col-offset-1 col-3">
                    <img class="picto" src="/images/cle.png">
                    <p>Garantie 2 ans</p>
                </div>
            </div>
        </article>

        <article class="container mb-4">
            <div class="row justify-content-center">
                <h2>Catégories</h2>
            </div>
            <div class="row pl-4 pr-4">
                <div class="col-6">
                    <img class="imagescategories" src="/images/sante.jpg" alt="santé">
                </div>
                <div class="col-6">
                    <img class="imagescategories" src="/images/confort.jpg" alt="confort">
                </div>
            </div>
        </article>
        <article>


            
        </article>
    </main>
@endsection