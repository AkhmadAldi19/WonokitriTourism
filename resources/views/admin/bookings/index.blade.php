@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Booking') }}</h1>
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

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telphone</th>
                                        <th>Tanggal booking</th>
                                        <th>Paket wisata</th>
                                        <th>Alamat</th>
                                        <th>Jumlah</th>
                                        <th>Booking Code</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->number_phone }}</td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->travel_package->location }}</td>
                                        <td>{{ $booking->address }}</td>
                                        <td>{{ $booking->quantity }}</td>
                                        <td>{{ $booking->booking_code }}</td>
                                        <td>
                                            @if($booking->status == 1)
                                                <button class="btn btn-danger">Belum Membayar</button>
                                            @elseif($booking->status == 2)
                                                <button class="btn btn-success">Sudah Membayar</button>
                                            @else
                                                <button class="btn btn-secondary">Status Tidak Diketahui</button>
                                            @endif
                                        </td>
                                        <td>{{ $booking->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.bookings.edit', [$booking]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('admin.bookings.destroy', [$booking]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $bookings->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
