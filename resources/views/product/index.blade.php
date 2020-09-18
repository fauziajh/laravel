@extends('layoutmaster')

@section('content')
    <div class="row">
        <div class="col-lg-22">
            <div class="pull-left">
            <h2>Laravel Fauzi Setiawan</h2>
            </div>
            <div class="pull-right">
            <a href="#" class="btn btn-success">Add Product</a>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>action</th>
            </tr>
            <tr>
                <th>1</th>
                <th>Buku tulis</th>
                <th>bisa buat nulis</th>
                <th>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </th>
            </tr>
        </table>
    </div>
@endsection