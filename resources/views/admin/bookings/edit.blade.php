@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Form Edit') }}</h1>
                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.bookings.update', [$booking]) }}">
                            @csrf
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $booking->name) }}" id="name" placeholder="example: John Doe">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="{{ old('email', $booking->email) }}" id="email" placeholder="example: example@gmail.com">
                                </div>
                            </div>

                            <div class="form-group row border-bottom pb-4">
                                <label for="number_phone" class="col-sm-2 col-form-label">No Telp</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="number_phone" value="{{ old('number_phone', $booking->number_phone) }}" id="number_phone" placeholder="example: 089654864884">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input placeholder="Pick Your Date"
                                    class="textbox-n"
                                    type="text"
                                    name="date"
                                    onfocus="(this.type='date')"
                                    id="date" name="date" value="{{ old('date', $booking->date) }}" >
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="travel_package_id" class="col-sm-2 col-form-label">Jenis Paket Wisata</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="travel_package_id" value="{{ old('travel_package_id', $booking->travel_package_id) }}" id="travel_package_id" placeholder="package type: 2">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" value="{{ old('address', $booking->address) }}" id="address" placeholder="example: Jl. Hayam Wuruk">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="quantity" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity', $booking->quantity) }}" id="quantity" placeholder="example: 2">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="booking_code" class="col-sm-2 col-form-label">Kode Booking</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="booking_code" value="{{ old('booking_code', $booking->booking_code) }}" id="booking_code" placeholder="example: ANYTZ">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="status" value="{{ old('status', $booking->status) }}" id="status" placeholder="example: 1 (Belum Bayar) | 2 (Sudah Bayar)">
                                </div>
                            </div>
                            <!-- Add other form fields related to bookings -->

                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
