@extends('layouts.admin')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input name ="name" type="text" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input name ="slug" type="text" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description"  rows="3" class="form-control border"></textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                              <input name="status" type="checkbox" class="form-check-input"> &nbsp&nbspStatus
                          </div> 
                    </div>

                    <div class="col-md-6 mt-3">                        
                        <div class="form-check">                       
                              <input name="popular" type="checkbox" class="form-check-input" > &nbsp&nbspPopular                            
                          </div>
                    </div>

                    

                    

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_title">Meta_title</label>
                            <input name ="meta_title" type="text" class="form-control border">
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_description">meta_description</label>           
                            <textarea name="meta_description"  rows="2" class="form-control border"></textarea> 
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">                        
                            <label for="meta_keywords">Meta Keywords</label>        
                            <textarea name="meta_keywords"  rows="2" class="form-control border"></textarea>                     
                    </div>
                    <div class="col-md-12 mt-3">
                     <input name ="image" type="file">                      
                    </div>

                    <div class="col-md-12 mt-3">
                       <button type="submit" class="btn btn-success" >Create Category</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection