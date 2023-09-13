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
               <h3>All Products</h3>
               <a href="{{url('admin/product/create')}}" class="btn btn-primary btn-sm  float-end">Add Product</a>

              </div>

              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Category</th>
                      <th scope="col">Product Title</th>
                      <th scope="col">Price</th>
                      <th scope="col">Selling Price</th>
                      <th scope="col">Image</th>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($products as $item)
                   
                    <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td>{{$item->category->name}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->selling_price}}</td>
                      <td>
                          <img src="{{asset('uploads/product/'.$item->image)}}" width="100px" height="100px" alt="">
                      </td>
                      <td>
                          <p>
                            {{$item->description}}
                          </p>
                      </td>
                      <td>
                        {{$item->status == '1'? 'Active': 'Inactive'}}
                      </td>
                      <td>
                          <a class="btn btn-primary btn-sm" href="{{url('admin/product/edit/'.$item->id)}}">Edit</a>
                          <a class="btn btn-danger btn-sm" onclick="return confirm('are you sure want to delete?')"  href="{{url('admin/product/destroy/'.$item->id)}}">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  
                   
                  </tbody>
                </table>

                <div class="flex">
                  {!! $products->links() !!}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection