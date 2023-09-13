@extends('admin.app')

@section('content')


<div class="container mt-5">

 
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

           <div class="card">
            <div class="card-header">
              <h2 class=" p-1">Add Category</h2>
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
        
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter category name">
                    </div>
                
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter category slug">
                    </div>
                
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label> <br>
                        <input type="file"  name="image">
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