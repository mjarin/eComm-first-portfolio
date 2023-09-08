@extends('layouts.admin')

@section('content')
    <div class="card" style="margin-top:10%;">
        <div class="card-header">
            <h4>Add Sub Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('store-sub-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">Sub Category Name</label>
                            <input name ="name" type="text" class="form-control border">
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
                            <input name ="subCateSlug" type="text" class="form-control border">
                        </div>  
                    </div>
                    
                    <div class="col-md-6 mt-5">                                                
                        <div class="form-check">
                              <input name="subCateStatus" type="checkbox" class="form-check-input"> &nbsp&nbspStatus
                          </div> 
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="subCateDescription"  rows="3" class="form-control border"></textarea>                        
                        </div>  
                    </div>


                    <div class="col-md-12 mt-5">
                       <button type="submit" class="btn btn-success" >Create Sub Category</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection