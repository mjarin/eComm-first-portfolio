@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="name">Product Name</label> 
                            <input type="text" name ="name" value="{{$product->name}}" class="form-control border">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input  type="text" name ="slug" value="{{$product->slug}}" class="form-control border">
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="">Category</label>
                        <select name="cate_id" class="form-select pl-2 pr-2">
                            <option  value="{{$product->category->id }}">{{$product->category->name }}</option>                          
                          </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="small-description">Small Description</label>
                            <textarea name="smallDescription"  rows="3" class="form-control border  pl-2">{{$product->small_description	}}</textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control border">{{$product->description}}</textarea>                        
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="original_price">Original Price</label>
                            <input name  ="original_price" value="{{$product->original_price}}" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="selling_price">Selling Price</label>
                            <input name ="selling_price" value="{{$product->selling_price}}" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="tax">Taxe</label>
                            <input name ="tax" value="{{$product->tax}}" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input name ="qty" value="{{$product->qty}}" type="number" class="form-control border  pl-2">
                        </div>  
                    </div>

                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                            <label for="">Status</label>
                              <input name="status" type="checkbox" class="form-check-input  pl-2" {{$product->status == 'on' ? 'checked' : ''}}>
                          </div> 
                    </div>
                    <div class="col-md-6 mt-3">                                                
                        <div class="form-check">
                            <label for="">Trending</label>
                              <input name="trending" type="checkbox" class="form-check-input  pl-2" {{$product->trending == 'on' ? 'checked' : ''}}>
                          </div> 
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_title">Meta_title</label>
                            <input  type="text" name ="meta_title" value="{{$product->meta_title}}" class="form-control border">
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label for="meta_description">meta_description</label>           
                            <textarea name="meta_description"  rows="2" class="form-control border">{{$product->meta_description}}</textarea> 
                        </div>  
                    </div>

                    <div class="col-md-12 mt-3">                        
                            <label for="meta_keyword">Meta Keywords</label>        
                            <textarea name="meta_keyword"  rows="2" class="form-control border">{{$product->meta_keyword}}</textarea>                     
                    </div>

                    @if($product->image)
                    <img src="{{asset('assets/upload/product/'.$product->image)}}" class="cate-img" alt="product image">
                    @endif
                    <div class="col-md-12 mt-3">
                     <input name ="image" type="file">                      
                    </div>

                    <div class="col-md-12 mt-3">
                       <button type="submit" class="btn btn-success" >Update Product</button> 
                    </div>
                    

                </div>{{-- End of row --}}               
            </form>
        </div>
    </div>
@endsection