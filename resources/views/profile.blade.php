@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                        <p>This is user {{ $user->name . ' ID: ' . $user->id }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
