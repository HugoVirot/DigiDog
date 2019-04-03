@extends ('layout.backoffice')

@section('content')

    <div class="container-fluid">
        <div class="row text-center mb-5">
            <div class="col m-0 p-0">

                <h1 class="w100 bg-dark text-light text-center">Modification Catégorie</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="{{route('admin.categories.update',[$category])}}" method="post">
                    <div class="form-group">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger toaster-info">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="exampleInputEmail1 " class="h3">Nom de la Catégorie</label>
                        <input type="text" class="form-control w-100" name="name" value="{{$category->name}}">

                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
