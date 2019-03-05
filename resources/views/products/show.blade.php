@extends ('layout.app')

@section('title')
    doggystyle gps
@endsection



@section('content')

    <div class="container mb-5">
        <div class="row mb-5">
            <div class="col-md-6 mt-2">
                <img src="{{ asset('images/photo_produit.jpeg') }}" class="photo_produit ">
            </div>

            <div class="col-md-6">
                <h1>Doggystyle GPS</h1>
                <h2>Traceur</h2>
                <h3>49,00 € + frais de livraison</h3>
                <ul>
                    <li>
                        <p>Suivez l'emplacement exact de votre animal de compagnie</p>
                    </li>
                    <li>
                        <p>Clôture virtuelle avec alertes smartphone</p>
                    </li>
                    <li>
                        <p>Convient aux colliers d'une épaisseur de 5 mm au maximum</p>
                    </li>
                </ul>

                <p>Le collier GPS vous permet de localiser votre animal de compagnie où qu'il soit et à n'importe quel
                    moment. Suivez l'emplacement exact de votre chien directement sur votre smartphone ou sur n'importe
                    quel navigateur. </p>
                <div class="form-inline">
                    <input class="form-control mr-3" type="number" id="tentacles" name="tentacles"
                           min="0" max="50">
                    <button type="button" class="btn btn-danger">Ajoutez au panier</button>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 text-center align-self-center ">
                <h4>Excellent produit pour mon chien !</h4>
                <p>"Un parfait mélange de précision et d’autonomie de la batterie. Bien sûr on a aussi l’option de Suivi
                    en Direct..... qui nous dit, comme le nom le dit ou est ton animal en ce moment."</p>
                <p>Marlene, 33 ans, tain l'Hermitage.</p>
            </div>
            <div class="col-md-4 text-center align-self-center">
                <h4>Trés bon gps</h4>
                <p>"Lorsque ma chienne s'est échappée, le tractive a été très rapide à la localiser et je l'ai retrouvée
                    pile à l'endroit où l'indiquait le traceur (à 2 mètres près)."</p>
                <p>Arthur, 37 ans, Paris</p>
            </div>
            <div class="col-md-4 text-center align-self-center">
                <h4>Super produit</h4>
                <p>"Produit excellent . Ne pas oublier de l'allumer. Trace votre chien et votre position à 1 m près et
                    en fond le plan de l'endroit où on se trouve. Bien le périmètre de sécurité qui déclenche
                    l'alarme."</p>
                <p>Antoine, 21 ans, Crest.</p>

            </div>

        </div>
    </div>


@endsection