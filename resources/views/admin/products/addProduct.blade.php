@extends('layouts.admin')

@section('content')
    <div class="card" style="margin-top:8%;">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <h4>Add Product</h4>
            <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="row">                

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input name ="name" type="text" class="form-control border  pl-2">
                        </div>  
                    </div>
 
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input name ="slug" type="text" class="form-control border  pl-2">
                        </div>  
                    </div>

                    
                    <div class="col-md-12 mt-3">
                        <select name="cate_id" class="form-select pl-2 pr-2" aria-label="Default select example">
                            <option value="" >Select a Category</option>
                            @foreach ($category as $cate)
                            <option value="{{$cate->id }}">{{$cate->name }}</option> 
                            @endforeach
                                                   
                          </select>
                    </div>

                   
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="small-description">Small Description</label>
                            <textarea name="smallDescription"  rows="3" class="form-control border  pl-2"></textarea>                        
                        </div>  
                    </div>
                    
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description"  rows="3" class="form-control border  pl-2"></textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="original_price">Original Price</label>
                            <input name ="original_price" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input name ="selling_price" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="tax">Taxe</label>
                            <input name ="tax" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input name ="qty" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                            <label for="">Status</label>
                              <input name="status" type="checkbox" class="form-check-input pl-2">
                          </div> 
                    </div>
                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                            <label for="">Trending</label>
                              <input name="trending" type="checkbox" class="form-check-input pl-2" >
                          </div> 
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_title">Meta_title</label>
                            <input name ="meta_title" type="text" class="form-control border pl-2">
                        </div>  
                    </div>
                    
                    <div class="col-md-12 mt-3">                        
                        <label for="meta_keyword">Meta Keywords</label>        
                        <textarea name="meta_keyword"  rows="2" class="form-control border"></textarea>                     
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_description">meta_description</label>           
                            <textarea name="meta_description"  rows="2" class="form-control border  pl-2"></textarea> 
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                     <input name ="image" type="file">                      
                    </div>

                    <div class="col-md-12 mt-4">
                       <button type="submit" class="btn btn-success" >Create & Save Product</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection