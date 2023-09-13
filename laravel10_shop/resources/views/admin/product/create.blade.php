@extends('admin.app')

@section('content')


<div class="container mt-5">

 
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

           <div class="card">
            <div class="card-header">
              <h2 class=" p-1">Add Product</h2>
            </div>
            <div class="card-body">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <select name="category_id" class="form-control" class="custom-select custom-select-lg mb-3">
                            <option selected>Select Category</option>
                            @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                    </div>
        
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter product title">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter price">
                    </div>

                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Selling Price</label>
                        <input type="number" class="form-control" name="selling_price" placeholder="Enter selling price">
                    </div>
                
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter product slug">
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="qty" placeholder="Enter quantity">
                    </div>
                
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label> <br>
                        <input type="file"  name="image">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label> <br>
                        <input type="checkbox"  name="status">
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control"   rows="5"></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
            </div>
           </div>
        </div>
    </div>
</div>

@endsection