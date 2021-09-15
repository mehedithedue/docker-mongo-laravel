@extends('layout.app')
@section('content')

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Optimal Analytics Product List</h2>
            </div>
        </div>
    </div>
</div>
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
                <table id="product" class="table table-striped  table-hover" cellspacing="0">
                    <thead class="table-dark">
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
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{!! $product->product !!}</td>
                            <td>{{ $product->amount }}</td>
                            <td>{{ $product->unit }}</td>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- end content-->
        </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
    @endsection

    @section('script')
    <script>
        $(document).ready(function() {
            $('#product').DataTable();
        });
    </script>
    @endsection