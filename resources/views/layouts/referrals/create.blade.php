@extends('layouts.main')
@section('content')
<div class="app-main__inner">
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div>
          REFERRALS CREATE
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-8">
      <div class="main-card mb-3 card">
        <div style="padding: 10px;">
         @if (session('success'))
         <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
         </div>
         @elseif(session('failed'))
         <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('failed') }}
         </div>
         @endif
         <form id="submitForm" action="{{route('referrals.create')}}" method="post">
            @csrf
            <div class="form-group required">
               <label for="email"> Enter Invited Email </label>
               <input type="email" class="form-control" id="email" name="email" required>
               @if ($errors->has('email'))
               <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         </div>
      </div>
   </div>
</div>
</div>
@endsection