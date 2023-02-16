@extends('master')

@section('content')
<div>
    <form id="submitForm" action="{{route('registration')}}" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
    @csrf
    <div class="form-group required">
        <label for="email"> Enter your Name </label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif 
    </div>
    <div class="form-group required">
        <label for="email"> Enter your Email </label>
        <input type="text" class="form-control" id="email" name="email" value="{{ isset($data['email']) &&  $data['email'] ? $data['email'] : old('email') }}">
        <input type="hidden" name="token" value="{{ isset($data['token']) &&  $data['token'] ? $data['token'] : '' }}">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif 
    </div>
    <div class="form-group required">  
        <label class="d-flex flex-row align-items-center" for="password"> Enter your Password </label>  
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif   
    </div>
    <div class="form-group required">  
        <label class="d-flex flex-row align-items-center" for="password"> Enter Confirm Password </label>  
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password_confirmation" autocomplete="current-password">
    </div>
    <div class="form-group pt-1">  
        <button class="btn btn-primary btn-block" type="submit"> Registration </button>  
    </div>
    </form>
    <p class="small-xl pt-3 text-center">  
    <span class="text-muted"> Already member? </span>  
    <a href="{{route('login')}}"> Log In </a>  
    </p>
</div>
@endsection