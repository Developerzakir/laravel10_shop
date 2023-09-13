@extends('admin.app')

@section('content')


<div class="container mt-5">

    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

           <div class="card">
            <div class="card-header">
              <h2 class=" p-1">Update Category</h2>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
        
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Enter category name">
                    </div>
                
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{$data->slug}}" name="slug" placeholder="Enter category slug">
                    </div>
                
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label> <br>
                        <label for="">Old Image</label>
                        <img src="{{asset('uploads/category/'.$data->image)}}" width="100px" height="100px" alt=""><br><br>

                        
                        <label for="">New Image uploads</label>
                        <input type="file"  name="image">
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control"   rows="5">{{$data->description}}</textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
           </div>
        </div>
    </div>
</div>

@endsection