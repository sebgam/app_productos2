@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel administrativo</div>

                <div class="panel-body">
                    <p>
                        <span id="products-total">{{ $products->total() }} </span>registros|
                        pagina {{$products->currentPage() }}
                        de {{ $products->lastPage() }}
                    </p>
                <div class="alert aler-info" id="alert"></div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="20px">ID</th>
                            <th>nombre del producto</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr>
                            <td width="20px">{{$item->id}}</td>
                            <td>{{ $item->name}}</td>
                            <td width="20px"></td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>

                {!!$products->render()!!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
