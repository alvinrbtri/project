@extends("admin.layouts.app")

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title">Dashboard <small>Control Panel</small></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="widget-overview bg-primary-1">
                <div class="inner">
                    <h2>$15K</h2>
                    <p>Sales Today</p>
                </div>

                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>

                <div class="details bg-primary-3">
                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="widget-overview bg-info-1">
                <div class="inner">
                    <h2>35%</h2>
                    <p>Growth in Traffic</p>
                </div>

                <div class="icon">
                    <i class="fa fa-signal"></i>
                </div>

                <div class="details bg-info-3">
                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="widget-overview bg-success-1">
                <div class="inner">
                    <h2>$8.5K</h2>
                    <p>Profit Today</p>
                </div>

                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>

                <div class="details bg-success-3">
                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="widget-overview bg-danger-1">
                <div class="inner">
                    <h2>8,952</h2>
                    <p>Unique Visitors</p>
                </div>

                <div class="icon">
                    <i class="fa fa-pie-chart"></i>
                </div>

                <div class="details bg-danger-3">
                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-top-10">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title">Sales Overview</h5>
                </div>
                <div class="ct-chart-dashboard height-250 ct-chart-blue"></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title">Recent Products</h5>

                    <div class="recent-products">
                        <ul>
                            <li>
                                <div class="product-image">
                                    <img src="{{ url('/dist') }}/assets/img/default-img.png" alt="">
                                </div>

                                <div class="product-info">
                                    <span class="product-title">
                                        <a href="#">Product Name</a>
                                        <span class="pull-right">
                                            <badge class="badge badge-primary">$1,800</badge>
                                        </span>
                                    </span>
                                    <span class="product-description">Product Description goes here.</span>
                                </div>
                            </li>

                            <li>
                                <div class="product-image">
                                    <img src="{{ url('/dist') }}/assets/img/default-img.png" alt="">
                                </div>

                                <div class="product-info">
                                    <span class="product-title">
                                        <a href="#">Product Name</a>
                                        <span class="pull-right">
                                            <badge class="badge badge-primary">$1,800</badge>
                                        </span>
                                    </span>
                                    <span class="product-description">Product Description goes here.</span>
                                </div>
                            </li>

                            <li>
                                <div class="product-image">
                                    <img src="{{ url('/dist') }}/assets/img/default-img.png" alt="">
                                </div>

                                <div class="product-info">
                                    <span class="product-title">
                                        <a href="#">Product Name</a>
                                        <span class="pull-right">
                                            <badge class="badge badge-primary">$1,800</badge>
                                        </span>
                                    </span>
                                    <span class="product-description">Product Description goes here.</span>
                                </div>
                            </li>

                            <li>
                                <div class="product-image">
                                    <img src="{{ url('/dist') }}/assets/img/default-img.png" alt="">
                                </div>

                                <div class="product-info">
                                    <span class="product-title">
                                        <a href="#">Product Name</a>
                                        <span class="pull-right">
                                            <badge class="badge badge-primary">$1,800</badge>
                                        </span>
                                    </span>
                                    <span class="product-description">Product Description goes here.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
