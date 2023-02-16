@extends('dashboard.main')
@section('content')
<div class="mt-4">
    <div class="card card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Referrer</th>
            <th scope="col">Email Referred</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lists as $list)
          <tr>
            <th scope="row">{{ ($lists->currentPage() - 1) * $lists->perPage() + $loop->iteration }}</th>
            <td>{{ $list['user']['name'] }}</td>
            <td>{{ $list['email'] }}</td>
            <td>{{ Carbon\Carbon::parse($list['created_at'])->format('d-M-Y') }}</td>
            <td>{{ $list['is_register'] ? 'Register' : 'Not Register' }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
        {!! $lists->links() !!}
      </div>
    </div>
</div>
@endsection