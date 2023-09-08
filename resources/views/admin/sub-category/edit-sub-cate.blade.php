@extends('layouts.admin')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h4>Update SubCategory</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-sub-category/'.$subCate->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">SubCategory Name</label> 
                            <input type="text" name ="name" value="{{$subCate->name}}" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="form-group">
                        <select name="cate_id" class="form-select pl-2 pr-2">
                            <option value="" >Select a Category</option>
                            @foreach ($category as $cate)
                            <option value="{{$cate->id }}">{{$cate->name }}</option> 
                            @endforeach
                                                   
                          </select>
                        </div>     
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input  type="text" name ="subCateSlug" value="{{$subCate->slug}}" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="subCateDescription" rows="3" class="form-control border">{{$subCate->description}}</textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                              <input name='subCateStatus' type="checkbox" class="form-check-input" {{$subCate->status == '1' ? 'checked' : ''}} > &nbsp&nbspStatus
                          </div> 
                    </div>

                    <div class="col-md-12 mt-5">
                       <button type="submit" class="btn btn-success" >Update Category</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection