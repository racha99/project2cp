@extends('layouts.app')

@section('content')
<div class="container">
        <div class="pt-4 bg"> </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(( $user->type === 'Premium') and ( $user->avatar ==='default.png'))
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">


                    <h2>{{ $user->name }}  {{ $user->last_name }}</h2>
                    <form enctype="multipart/form-data" action="/premium" method="POST">
                        <label>Télécharger une image de profile</label>
                     <div class="file-path-wrapper">
                        <input type="file" name="avatar">
                    </div>
                    <div >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div>
                        <input type="submit" class="pull-right  btn btn-sm btn-primary">
                    </div>
                    </form>
                    @else
                    You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
