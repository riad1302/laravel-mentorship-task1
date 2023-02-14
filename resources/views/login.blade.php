@extends('master')

@section('content')
   <div>
      <form id="submitForm" action="{{route('login')}}" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
            @csrf
            <div class="form-group required">
            <label for="email"> Enter your Email </label>
            <input type="text" class="form-control" id="email" required="" name="email">
            @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif 
            </div>
            <div class="form-group required">  
            <label class="d-flex flex-row align-items-center" for="password"> Enter your Password   
            <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>  
            <input type="password" class="form-control" required="" id="password" name="password">
            @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
               @endif   
            </div>
            <div class="form-group mt-4 mb-4">
            <div class="custom-control custom-checkbox">  
               <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">  
               <label clss="custom-control-label" for="remember-me"> Remember me? </label>  
            </div>
            </div>
            <div class="form-group pt-1">  
            <button class="btn btn-primary btn-block" type="submit"> Log In </button>  
            </div>
      </form>
      <p class="small-xl pt-3 text-center">  
            <span class="text-muted"> Not a member? </span>  
            <a href="{{route('registration')}}"> Sign up </a>  
      </p>
   </div>
@endsection