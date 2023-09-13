@extends('admin.app')

@section('content')



<div class="container mt-5">
    <div class="row">
     
  
        <div class="col-md-10 mx-auto mt-5">

          @if(session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('message')}}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">

              <div class="card-header">
               <h3>All Orders</h3>
              </div>

              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Address</th>
                      <th scope="col">Delivery Location</th>
                      <th scope="col">Total Amount</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order as $item)
                    <tr>
                    
                      <td>{{$item->name}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->address}}</td>
                      <td>{{$item->location == '1' ? 'ঢাকার ভিতরে':'ঢাকার বাহিরে'}}</td>
                      <td>{{$item->total_amount}} &nbsp; Tk</td>
                      <td>{{$item->status}}</td>
                     
                      <td>
                          <a class="btn btn-success btn-sm"  href="{{url('active_order', $item->id)}}">Approved</a>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
                <div class="d-flex">
                  {{-- {!! $category->links() !!} --}}

                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection