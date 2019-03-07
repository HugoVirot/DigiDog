@extends ('layout.app')


@section('title')

@endsection



@section('content')

    <div class="container align-justify-content">
        <div class="row">
            <div class="col-md-6">
                <img class="align-justify-content pt-4" src='{{ asset('images/a_propos.jpg') }}' width="500" height="350" halt="Photo de chiens" />
            </div>
            <div class="col-md-6">
                <h1>A propos de DigiDog</h1>
                <p>
                    <b><em>La mission de Digidog est de créer des solutions technologiques afin de renforcer le lien entre les animaux de compagnie et leurs propriétaires pour qu'ils puissent vivre ensemble plus longtemps, en sécurité et en bonne santé.</em> </b>
                    Digidog a été fondé en 2019 à Valence, en France, par trois entrepreneurs passionnés qui cherchent à créer un environnement plus sûr pour les millions d'animaux de compagnie dans le monde. Digidog se spécialise dans le développement d'accessoires pour animaux de compagnie et d'applications pour les propriétaires d'animaux de compagnie et les amoureux des animaux. En plus du GPS WAFWAF, produit vedette de Digidog et son application principale, l'entreprise produit une gamme d'applications, y compris l'application Hotdog très populaire et le réseau social pour animaux de compagnie Digidog Photos, utilisés par des millions de propriétaires d'animaux. Les autres produits du portfolio de DigiDog comprennent des applications telles que Pet digipet, digilove et digicat.
                </p>
            </div>
        </div>
    </div>



@endsection

