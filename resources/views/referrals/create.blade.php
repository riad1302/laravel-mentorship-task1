@extends('dashboard.main')

@section('content')

<div class="row">
    <div class="col-md-8 mx-auto mt-4">
        <div class="card card-body">
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
            <form id="submitForm" action="{{route('login')}}" method="post">
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
@endsection