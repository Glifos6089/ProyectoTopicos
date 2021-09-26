@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin View</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.accesory.saveEditAccesory') }}">
                        @csrf
                        <input type="text" name="id" value="{{ $data['Accesory']->getId()}}" hidden>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="{{ $data['Accesory']->getName() }}"
                                name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="{{ $data['Accesory']->getPrice() }}"
                                name="price" value="{{ old('price') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection