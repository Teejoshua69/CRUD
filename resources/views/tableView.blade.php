@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
 
        <div class="row">
            <div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div>
                                <link rel="stylesheet" href="{{ asset('assets/css/datatable.min.css') }}">
                                <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
                                <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
                                <script src="{{ asset('assets/js/axios.min.js') }}"></script>
                                <script src="{{ asset('assets/js/js.js') }}"></script>

                                <table class="table table-striped align-items-center w-100 no-wrap">
                                    <thead>
                                        <tr>
                                            <th>userName</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>role</th>
                                        </tr>
                                    </thead>
                                    <tbody class= "tablebody">
                                        {{-- @foreach ($appointments as $item)
                                            <tr>
                                                <td>{{ $item->userName }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->role }}</td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection