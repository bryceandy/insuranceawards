@extends('layouts.app')

@section('content')
<div class="container dashboard-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->user()->roles[0]['id'] > 1)
                        <div class="col-md-12">
                            <h3>Manage Users</h3>

                            <ul style="padding-left: unset">
                                @foreach( $users as $user)
                                    @if( auth()->id() === $user->id)

                                        <li class="w-100 card user-manage">
                                            <span>Me</span>
                                            <button type="button" class="btn btn-secondary" onclick="goHome()">Back Home</button>
                                        </li>
                                    @else

                                        @if ( $user->roles[0]['id'] > 1)

                                            <li class="col-md-12 card user-manage" id="user{{ $user->id }}">
                                                <span>{{ $user->name  }}</span>
                                                <button type="button" class="btn btn-danger deleteUser" id="{{ $user->id }}" name="{{ $user->name }}">Delete User</button>
                                            </li>
                                        @else

                                            <li class="col-md-12 card user-manage" id="user{{ $user->id }}">
                                                <span>{{ $user->name  }}</span>
                                                <button type="button" class="btn btn-danger deleteUser" id="{{ $user->id }}" name="{{ $user->name }}">Delete User</button>
                                                <button type="button" class="btn btn-info upgradeUser" uid="{{ $user->id }}" name="{{ $user->name }}">Upgrade to Admin</button>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <hr>

                        <div class="container col-md-12">
                            <h3>Registered votes</h3>

                            <div class="row votes-row">
                                <div class="col col-md-6">
                                    <h5>Insurance Company of the Year</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->icoya }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>Most Innovative Insurance Product</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->miip }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>Young Achievers' Award (Ideas)</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->yaa1 }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>Young Achievers' Award (Entrepreneurship)</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->yaa2 }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>Insurance Brokerage of the Year</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->iboya }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>insurance Awareness Campaign of the Year</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->iacoya }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col col-md-6">
                                    <h5>Corporate Social Responsibility Award</h5>

                                    <ul style="padding-left: unset">
                                        @foreach( $votes as $vote)

                                            <li class="card col-md-12 votes">
                                                {{ $vote->name }} - {{ $vote->csra }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="container col-md-12">
                            <div class="row voters-row">

                                <h3>Voters</h3>

                                <!-- Table  -->
                                <table class="table">
                                    <!-- Table head -->
                                    <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Address</th>
                                        <th>Insurance Company of the Year</th>
                                        <th>Most Innovative Insurance Product</th>
                                        <th>Young Achievers' Award (Ideas)</th>
                                        <th>Young Achievers' Award (Entrepreneurship)</th>
                                        <th>Insurance Brokerage of the Year</th>
                                        <th>Insurance Awareness Campaign of the Year</th>
                                        <th>Corporate Social Responsibility Award</th>
                                    </tr>
                                    </thead>
                                    <!-- Table head -->

                                    <!-- Table body -->
                                    <tbody>

                                    @foreach( $voters as $voter)

                                        <tr>
                                            <th scope="row">{{ $voter->id }}</th>
                                            <td>{{ $voter->ip }}</td>
                                            <td>{{ $voter->icoya }}</td>
                                            <td>{{ $voter->miip }}</td>
                                            <td>{{ $voter->yaa1 }}</td>
                                            <td>{{ $voter->yaa2 }}</td>
                                            <td>{{ $voter->iboya }}</td>
                                            <td>{{ $voter->iacoya }}</td>
                                            <td>{{ $voter->csra }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts-below')
    <script>
        $(document).ready(function() {

            $('.deleteUser').each(function () {
                $(this).click(function () {

                    let $userId = $(this).prop('id'), $username = $(this).prop('name');

                    swal({
                        title: "Are you sure?",
                        text: $username+" will be erased from all records!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                deleteUser($userId)
                            }
                            else {
                                swal("Deletion cancelled!");
                            }
                        });

                })

            });

            $('.upgradeUser').each(function () {
                $(this).click(function () {

                    let $userId = $(this).attr('uid'), $username = $(this).prop('name');

                    swal({
                        title: "Are you sure?",
                        text: $username+" will become an administrator!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willUpgrade) => {
                            if (willUpgrade) {
                                upgradeUser($userId)
                            }
                            else {
                                swal("Action cancelled!");
                            }
                        });

                })

            });

        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function goHome() {
            $.ajax({
                url: '/',
                method: 'GET'
            })
                .fail(function( data, textStatus, jqXHR ) {
                    console.log('fail '+JSON.stringify(jqXHR))
                })
                .done(function () {
                    window.location = '/'
                })
        }

        function deleteUser($id) {
            $.ajax({
                url: '/delete/user/'+$id,
                method: 'GET'
            })
                .fail(function( data, textStatus, jqXHR ) {
                    console.log('fail '+JSON.stringify(jqXHR))
                })
                .done(function ( data, textStatus, jqXHR ) {

                    if ( jqXHR.status === 200 ) {

                        $('#user'+$id).fadeOut()
                    }
                    if ( jqXHR.status === 401 ) {

                        swal('You are unauthorized to perform this action!')
                    }
                    console.log('Yess '+jqXHR.status+' and status '+textStatus+' and data: '+JSON.stringify(data))
                })
        }

        function upgradeUser($id) {
            $.ajax({
                url: '/upgrade/user/'+$id,
                method: 'GET'
            })
                .fail(function( data, textStatus, jqXHR ) {
                    console.log('fail '+JSON.stringify(data))
                })
                .done(function ( data, textStatus, jqXHR ) {

                    if ( jqXHR.status === 200 ) {

                        $('button[uid='+$id+']').fadeOut()
                    }
                    if ( jqXHR.status === 401 ) {

                        swal('You are unauthorized to perform this action!')
                    }
                    console.log('Yess '+jqXHR.status+' and status '+textStatus+' and data: '+JSON.stringify(data))
                })
        }
    </script>
@endsection
