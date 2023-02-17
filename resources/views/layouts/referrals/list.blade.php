@extends('layouts.main')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>
               REFERRALS LIST
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div style="padding: 10px;">
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
               {!! $lists->links() !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection