@extends('layouts.dashboard')

@section('dashboard-content')
<div class="dashboard-tlbar d-block mb-5">
    <div class="row">
        <div class="colxl-12 col-lg-12 col-md-12">
            <h1 class="ft-medium">Transactions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="theme-cl">Transactions</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="dashboard-widg-bar d-block">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="mb-4 tbl-lg rounded overflow-hidden">
                <div class="table-responsive bg-white">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sr. No.</th>
                                <th scope="col">Transaction id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Expired</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                            <tr>
                                <td><span>{{$payment->id}}</span></td>
                                <td>#{{$payment->id}}</td>
                                <td><a href="javascript:void(0);" class="theme-cl">{{$payment->title}}</a></td>
                                <td>{{$payment->period}}</td>
                                <td><span class="theme-cl">{{$payment->transactions->where('user_id', auth()->user->id)->first() ? 'paid' : 'pending'}}</span></td>
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
