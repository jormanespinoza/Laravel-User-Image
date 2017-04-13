@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <img src="/uploads/avatars/{{ $user->avatar }}" alt="Profile Image" class="img-avatar">
          <h3>{{ $user->name }}'s Profile</h3>
          <form enctype="multipart/form-data" action="/profile" method="POST">
            <label for="avatar">Update Profile Image</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">
          </form>
        </div>
    </div>
</div>
@endsection
