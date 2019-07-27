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
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL NO.</th>
                    <th>VOUCHER NUMBER</th>
                    <th>VOUCHER DATE</th>
                    <th>VOUCHER FOR</th>
                    <th>PUBLICATION STATUS</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($vouchers as $voucher)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $voucher->voucher_number }}</td>
                    <td>{{ $voucher->voucher_date }}</td>
                    <td>{{ $voucher->voucher_for }}</td>
                    <td>{{ $voucher->publication_status }}</td>
                    <td>
                        <a href="#" class="btn btn-success btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        <a href="#" class="btn btn-success btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        <a href="#" class="btn btn-success btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        <a href="#" class="btn btn-success btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection