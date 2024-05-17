@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    <section class="section dashboard">

        <div class="row">

            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Total Members</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-group-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>10</h6>
                                

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Paitents </h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-hotel-bed-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>264</h6>
                               

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-4 col-xl-4">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Total Bookings</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-map-pin-add-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>1244</h6>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
