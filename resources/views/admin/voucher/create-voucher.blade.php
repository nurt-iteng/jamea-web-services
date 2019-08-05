@extends('admin.master')

@section('title')
    SHOW VOUCHER
@endsection

@section('page-header')
    VOUCHER INFO
@endsection

@section('main-content')
    <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-success">
            @if( $message = Session::get('message') )
                <h2 class="text-center text-success">{{ $message }}</h2>
            @endif
            <!-- /.box-header -->
            <!-- form start -->
            <form name="add_name" id="add_name" class="form-horizontal" action="{{ url('/voucher/voucher-info') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">ভাউচার নং</label>

                        <div class="col-sm-8">
                            <input type="number" name="voucher_number" class="form-control" id="voucher_number" placeholder="ভাউচার নং" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">প্রদানকারীর নাম</label>

                        <div class="col-sm-8">
                            <input type="text" name="voucher_to" class="form-control" id="voucher_number" placeholder="প্রদানকারীর নাম দিন" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">তারিখ</label>

                        <div class="col-sm-8">
                            <input type="date" name="voucher_date" class="form-control" id="voucher_date" placeholder="তারিখ" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">বাবদ</label>

                        <div class="col-sm-8">
                            <input type="text" name="voucher_for" class="form-control" id="voucher_for" placeholder="বাবদ" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="বিবরণ" class="col-sm-4 control-label">বিবরণ</label>

                        <div class="col-sm-8">
                            <textarea id="voucher_description" name="voucher_description" rows="10" cols="80" placeholder="বিবরণ" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">টাকার পরিমান (অংকে)</label>

                        <div class="col-sm-8">
                            <input type="number" name="amount_digit" class="form-control" id="amount_digit" placeholder="টাকার পরিমান দিন" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">মোট টাকা (কথায়)</label>

                        <div class="col-sm-8">
                            <input type="text" name="total_amount_word" class="form-control" id="inputEmail3" placeholder="কথায়" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">প্রকাশনার অবস্থা</label>

                        <div class="col-sm-8">
                            <select class="form-control" name="publication_status">
                                <option>নির্বাচন করুন</option>
                                <option value="1">প্রকাশিত</option>
                                <option value="0">অপ্রকাশিত </option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Save Voucher Info</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box-body -->
    </div>
        <!-- /.box -->
@endsection