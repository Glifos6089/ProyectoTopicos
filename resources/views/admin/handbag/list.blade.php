@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Handbags List</div>

                <div class="card-body">
                    <table style="width:100% ; border-spacing: 5px ">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Style</th>
                            <th>Color</th>
                            <th>Score</th>
                            <th>Texture</th>
                            <th>Image</th>
                        </tr>
                        @foreach($data["handbags"] as $handbag)
                        <tr>
                            <td>{{ $handbag->getName() }}</td>
                            <td>{{ $handbag->getPrice() }}</td>
                            <td>{{ $handbag->getStyle() }}</td>
                            <td>{{ $handbag->getColor() }}</td>
                            <td>{{ $handbag->getScore() }}</td>
                            <td>{{ $handbag->getTexture() }}</td>
                            <td>{{ $handbag->getImage() }}</td>
                            <td>
                                <a href="edit/{{$handbag->getName()}}" class="btn btn-primary" role="button" aria-pressed="true">Edit Handbag</a>
                            </td>
                            <td>
                               <form method="POST" action="{{ route('admin.handbag.delete') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" name="id" value="{{ ($handbag->getId()) }}">Delete</button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection