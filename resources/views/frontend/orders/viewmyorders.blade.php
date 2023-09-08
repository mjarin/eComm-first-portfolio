@extends('layouts.front')

@section('title')
 My Orders
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card  mt-5 ">
                <div class="card-header bg-warning">
                <h4 class="font-weight-bold text-center">
                    {{$customer_orders['0']['fname']}}'s Orders
                    
                </h4>
                </div>

                <div class="card-body">
                <table class="table table-striped mt-5 text-center">
                <thead>
                    <tr class="text-success">
                        <th>Order Date</th>
                        <th>Tracking Number</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>View Order</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($customer_orders as $orsers)
                   <tr>
                        <td>{{date('d-m-Y' , strtotime($orsers->created_at))}}</td>
                        <td>{{$orsers->tracking_no}}</td>
                        <td>{{$orsers->total_price}}</td>
                        <td>{{$orsers->status == '0' ? 'Pending' : 'Completed'}}</td>
                        <td>
                            <div class="">
                                <a href="{{url('view-order/'.$orsers->id)}}" class="btn btn-outline-success rounded-circle"  style="font-size: 10px!important;" ><i class="fa fa-eye" aria-hidden="false" ></i></a>
                            </div>
                        </td>
                    </tr> 
                   @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection