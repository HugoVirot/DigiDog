@extends ('layout.backoffice')


@section('content')

    <h1 class="w100 bg-dark text-light text-center mt-3">Catégories</h1>

    <a class="btn btn-success ml-5 mb-5" href="{{route('admin.categories.create')}}">Ajouter une catégorie</a>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Nom</th>
            <th class="text-center" scope="col">Action</th>
            <th class="text-center" scope="col">Action</th>
        </tr>
        </thead>

        @foreach($categories as $category)
            <tbody>
            <tr>
                <th class="text-center" scope="row">{{$category->id}}</th>
                <td class="text-center">{{$category->name}}</td>

                <td class="text-center">
                    <form action="{{route('admin.categories.edit',$category)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-secondary"
                                href="{{ route('admin.categories.edit', ['category' => $category])}}">Modifier
                        </button>
                    </form>
                </td>


                <td class="text-center">
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-primary" value="supprimer">
                    </form>
                </td>


            </tr>


            @endforeach

            </tbody>
    </table>
@endsection
