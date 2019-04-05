@extends ('layout.backoffice')

@section('content')

    <div class="container-fluid">
        <div class="row text-center mb-5">
            <div class="col m-0 p-0">
                <h1 class="w100 bg-dark text-light text-center mt-3">Ajout Catégorie</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    <div class="form-group">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger toaster-info">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="name" class="h3">Nom de la Catégorie</label>
                        <input type="text" class="form-control w-100" name="name" value="{{ old('name') }}">

                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
