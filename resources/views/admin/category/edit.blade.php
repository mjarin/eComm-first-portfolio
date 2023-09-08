@extends('layouts.admin')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h4>Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">Category Name</label> 
                            <input type="text" name ="name" value="{{$category->name}}" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input  type="text" name ="slug" value="{{$category->slug}}" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control border">{{$category->description}}</textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                              <input type="checkbox" class="form-check-input" {{$category->status == '1' ? 'checked' : ''}} > &nbsp&nbspStatus
                          </div> 
                    </div>

                    <div class="col-md-6 mt-3">                        
                        <div class="form-check">                       
                              <input type="checkbox" class="form-check-input" {{$category->popular  == '1' ? 'checked' : ''}} > &nbsp&nbspPopular                            
                          </div>
                    </div>                                        

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_title">Meta_title</label>
                            <input  type="text" name ="meta_title" value="{{$category->meta_title}}" class="form-control border">
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_description">meta_description</label>           
                            <textarea name="meta_description"  rows="2" class="form-control border">{{$category->meta_description}}</textarea> 
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">                        
                            <label for="meta_keywords">Meta Keywords</label>        
                            <textarea name="meta_keywords"  rows="2" class="form-control border">{{$category->meta_keywords}}</textarea>                     
                    </div>

                   
                    <div class="col-md-12 mt-3">
                        @if($category->image)
                        <img src="{{asset('assets/upload/category/'.$category->image)}}" height="80" width="80" alt="category image">
                        @endif
                     <input name ="image" type="file" class="ml-5">                      
                    </div>

                    <div class="col-md-12 mt-5">
                       <button type="submit" class="btn btn-success" >Update Category</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection