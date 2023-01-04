@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-4 table-responsive">
        <table class="table table-hover table-bordered ">
            <thead class="table-secondary">
                <th>#</th>
                <th>ID VERSI</th>
                <th>ID SHORTLINK</th>
                <th>USERNAME</th>
                <th>IP</th>
                <th>USERAGENT</th>
                <th>EXPIRED TOKEN</th>
                <th>COUNT USE</th>
                <th>CREATED AT</th>
                <th>Action</th>
            </thead>
            @foreach ($dataUser as $user)
                <tbody>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->id_versi }}</td>
                    <td>{{ $user->id_shortlink }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->ip }}</td>
                    <td>{{ $user->userAgent }}</td>
                    <td>{{ $user->expiredToken }}</td>
                    <td>{{ $user->count }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td></td>
                </tbody>
            @endforeach
        </table>

    </div>
@endsection
