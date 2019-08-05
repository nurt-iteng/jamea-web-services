@extends('admin.master')

@section('title')
    MANAGE VOUCHER
@endsection

@section('page-header')
    SHOW VOUCHER INFO
@endsection

@section('main-content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Show Voucher Info</h3>
            @if( $message = Session::get('message') )
                <h2 class="text-center text-success">{{ $message }}</h2>
            @endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>SL NO.</th>
                    <th>VOUCHER ID</th>
                    <th>VOUCHER DATE</th>
                    <th>VOUCHER FOR</th>
                    <th>TOTAL AMOUNT(DIGIT)</th>
                    <th>PUBLICATION STATUS</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($vouchers as $voucher)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $voucher->id }}</td>
                    <td>{{ $voucher->voucher_date }}</td>
                    <td>{{ $voucher->voucher_for }}</td>
                    <td>{{ $voucher->amount_digit}}</td>
                    <td>{{ $voucher->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                    <td>
                        @if ($voucher->publication_status == 1)
                        <a href="{{ url('/voucher/unpublished-voucher/'.$voucher->id) }}" class="btn btn-success btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        @else
                        <a href="{{ url('/voucher/published-voucher/'.$voucher->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                        @endif
                        <a href="{{ url('/voucher/view-voucher/'.$voucher->id) }}" class="btn btn-info btn-xs" title="Edit Voucher Info">
                            <span class="glyphicon glyphicon-zoom-out"></span>
                        </a>
                        <a href="{{ url('/voucher/view-pdf/'.$voucher->id) }}" class="btn btn-primary btn-xs" title="View As PDF">
                            <span class="fa fa-file-pdf-o"></span>
                        </a>
                        <a href="{{ url('/voucher/edit-voucher/'.$voucher->id) }}" class="btn btn-info btn-xs" title="Edit Voucher Info">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a href="{{ url('/voucher/delete-voucher/'.$voucher->id) }}" onclick="return confirm('Are you sure to delete this !!');" class="btn btn-danger btn-xs" title="Delete Voucher Info">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection