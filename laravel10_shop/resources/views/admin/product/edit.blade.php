@extends('admin.app')

@section('content')


<div class="container mt-5">

 
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

           <div class="card">
            <div class="card-header">
              <h2 class=" p-1">Update Product</h2>
            </div>
            <div class="card-body">
                <form action="{{url('admin/product/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <select name="category_id" class="form-control" class="custom-select custom-select-lg mb-3">
                            <option selected>Select Category</option>
                            @foreach($category as $item)
                            <option value="{{$item->id}}" {{$data->category_id == $item->id ? 'selected':''}}>
                                {{$item->name}}
                            </option>
                            @endforeach
                          </select>
                    </div>
        
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" value="{{$data->title}}" class="form-control" name="title" placeholder="Enter product title">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" value="{{$data->price}}" class="form-control" name="price" placeholder="Enter product price">
                      </div>

                      <div class="mb-3">
                        <label for="selling_price" class="form-label">Selling Price</label>
                        <input type="number" value="{{$data->selling_price}}" class="form-control" name="price" placeholder="Enter product selling price">
                      </div>
                
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" value="{{$data->slug}}" class="form-control" name="slug" placeholder="Enter product slug">
                    </div>
                
                    <div class="mb-3">
                        <label for="">Old Image</label><br>
                        <img src="{{asset('uploads/product/'.$data->image)}}" width="100px" height="100px" alt=""><br><br>


                        <label for="image" class="form-label">Image</label> <br>
                        <input type="file"  name="image">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label> <br>
                        <input type="checkbox"  name="status" {{$data->status == '1' ? 'checked':''}}>
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="5">
                            {{$data->description}}
                        </textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
           </div>
        </div>
    </div>
</div>

@endsection