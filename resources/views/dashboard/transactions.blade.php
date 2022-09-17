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
                            <tr>
                                <td><span>01</span></td>
                                <td>#WKPL12363</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Silver Pack</a></td>
                                <td>07 Jan 2021</td>
                                <td><span class="theme-cl">Active</span></td>
                            </tr>
                            <tr>
                                <td><span>02</span></td>
                                <td>#WKPL12364</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Golden Pack</a></td>
                                <td>22 Dec 2021</td>
                                <td><span class="theme-cl">Active</span></td>
                            </tr>
                            <tr>
                                <td><span>03</span></td>
                                <td>#WKPL12365</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Silver Pack</a></td>
                                <td>10 Sep 2021</td>
                                <td><span class="theme-cl">Active</span></td>
                            </tr>
                            <tr>
                                <td><span>01</span></td>
                                <td>#WKPL12366</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Platinum Pack</a></td>
                                <td>02 Feb 2020</td>
                                <td><span class="text-danger">Expired</span></td>
                            </tr>
                            <tr>
                                <td><span>01</span></td>
                                <td>#WKPL12367</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Silver Pack</a></td>
                                <td>10 Oct 2021</td>
                                <td><span class="theme-cl">Active</span></td>
                            </tr>
                            <tr>
                                <td><span>02</span></td>
                                <td>#WKPL12368</td>
                                <td><a href="javascript:void(0);" class="theme-cl">Silver Pack</a></td>
                                <td>07 Jan 2021</td>
                                <td><span class="theme-cl">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
