@extends('layout.app')
@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">Optimal Analytics</div>
</nav>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">All Products </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="product" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Unit</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <th>{!! $product->product !!}</th>
                                    <th>{{ $product->amount }}</th>
                                    <th>{{ $product->unit }}</th>
                                    <th>{{ $product->created_at }}</th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- end content-->
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
</main>
@endsection

@section('script')
    <script>
        $(document).ready( function () {
            $('#product').DataTable();
        } );
    </script>
@endsection