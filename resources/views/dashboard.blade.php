@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->user()->roles[0]['id'] > 1)
                        <div class="col-md-12">
                            <p class="text-center"><b>Manage Users</b></p>
                                <ul>
                                    @foreach( $users as $user)
                                        @if( auth()->id() === $user->id)

                                            <li class="col-md-12 card user-manage">
                                                Me
                                                <button type="button" class="btn btn-danger">Delete Account</button>
                                                <button type="button" class="btn btn-info">Logout</button>
                                            </li>
                                        @else
                                            <li class="col-md-12 card user-manage">

                                                @if (auth()->user()->roles[0]['id'] === 2)

                                                    <li class="col-md-12 card user-manage">
                                                        {{ $user->name  }}
                                                        <button type="button" class="btn btn-danger">Delete User</button>
                                                    </li>
                                                @else

                                                <li class="col-md-12 card user-manage">
                                                    {{ $user->name  }}
                                                    <button type="button" class="btn btn-danger">Delete User</button>
                                                    <button type="button" class="btn btn-info">Upgrade Admin</button>
                                                </li>
                                                @endif
                                        @endif
                                    @endforeach
                                </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
