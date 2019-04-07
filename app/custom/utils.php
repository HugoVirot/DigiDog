<?php
namespace App\custom ;


    use App\Product;
    use Illuminate\Support\Facades\Session;


    /**
     * @param Product $products
     * @param $allQts
     * @return array
     */
    function calculateLine($products, $allQts){


        // tableau des sommes p * qts
        $sommeLigne = [];


        // calcul du prix des produits * prix unitaire
        foreach ($products as $key => $product) {
            array_push($sommeLigne, ($product->price * $allQts[$key]));
        }

        return $sommeLigne;
    }


    /**
     * @return array  [ PRODUCT[]  Somme[] total[] qts[] ]
     *
     *
     */
    function recapPanier($frais = null){

        // id des produits
        $productsKey = [];
        // Qts par produits
        $allQts = [];
        // tableau des sommes p * qts
        $sommeLigne = [];


        $panier = sessionToArray();

        // recuperer les produits et calculer le prix par ligne
        foreach ($panier as $product => $qts) {
            array_push($productsKey, $product);
            array_push($allQts, $qts);
        }

        // On récupère les produits
        $products = Product::find($productsKey);
        //calcul la somme des lignes de commande et le place dans un array[];
        $sommeLigne = calculateLine($products,$allQts);
        // Total de la commande sans les frais de port
        $total = Array_sum($sommeLigne);

        if ($frais){
            return ['products' => $products, 'sommesLigne' => $sommeLigne, 'total' => $total,'qts' => $allQts, 'frais' =>  $frais];
        }else{
            return ['products' => $products, 'sommesLigne' => $sommeLigne, 'total' => $total,'qts' => $allQts];
        }

    }
    function sessionToArray(){
        $panier =[];
        if (session()->has('panier')) {
            $panier = session()->get('panier');
        }

        return $panier;
    }
    function arrayToSession($panier){
        Session::put('panier', $panier);
    }



