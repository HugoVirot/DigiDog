@extends ('layout.app')

@section('title')
    Produit
@endsection



@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 mt-2">
                <img src="../images/photo_produit.jpeg" class="photo_produit ">
            </div>

            <div class="col-md-6">
                <h1>Doggystyle GPS</h1>
                <h2>Traceur</h2>
                <h3>49,00 €</h3>
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
                    <input class= "form-control mr-3" type="number" id="tentacles" name="tentacles"
                           min="0" max="50">
                    <button type="button" class="btn btn-danger">Ajoutez au panier</button>
                </div>


            </div>
        </div>
    </div>



@endsection

