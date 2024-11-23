@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="" target="_blank">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <section class="content">
        <div class="container-fluid">

            @if (Auth::user()->type == 1)
                <!-- Small boxes (Stat box) -->
                @if (auth()->user()->can('view.admin.dashboard'))
                    <div class="row">

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Total Accumulated Sales </h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.all') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.all') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yearly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Current Year Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yearly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yearly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.current.year') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.current.year') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Current Month Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.current.month') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.current.month') }}" class="small-box-footer">More info
                                        <i class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Today's Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.today') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.today') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Yesterday's Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.yesterday') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.yesterday') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 9;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Delivered Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 9) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 2;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Accepted Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 2) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 4;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Completed Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 4) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 8;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>In Transit Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 8) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->is_return == 1;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Fully Returned Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->is_return == 2;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Partially Returned</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders_not_final->filter(function ($order) {
                                                return $order->order_status_id == 1;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Pending Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 1) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 5;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Canceled Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 5) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->source == 'Website';
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Website Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                @else
                    <div class="row">

                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Current Month Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $monthly_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.current.month') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.current.month') }}" class="small-box-footer">More info
                                        <i class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Today's Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $daily_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.today') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.today') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5;
                                                    })->sum('price'),
                                            ) }}
                                    </h3>

                                    <h4>Yesterday's Sales</h4>

                                    <h5>Retail:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source != 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                    <h5>Wholesale:
                                        {{ env('CURRENCY') .
                                            ' ' .
                                            round(
                                                $yesterday_orders->filter(function ($order) {
                                                        return $order->order_status_id != 5 && $order->source == 'Wholesale';
                                                    })->sum('price'),
                                            ) }}
                                    </h5>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                @if (!Auth::user()->vendor)
                                    <a href="{{ route('order.yesterday') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @else
                                    <a href="{{ route('vendor_sell.yesterday') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 9;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Delivered Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 9) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 2;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Accepted Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 2) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 4;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Completed Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 4) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 8;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>In Transit Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 8) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->is_return == 1;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Fully Returned Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->is_return == 2;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Partially Returned</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders_not_final->filter(function ($order) {
                                                return $order->order_status_id == 1;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Pending Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 1) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->order_status_id == 5;
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Canceled Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('order.status.filter', 5) }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>
                                        {{ count(
                                            $orders->filter(function ($order) {
                                                return $order->source == 'Website';
                                            }),
                                        ) }}
                                    </h3>

                                    <p>Website Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                @endif
            @endif


        </div><!-- /.container-fluid -->
    </section> --}}
    <!-- /.content -->
@endsection

@section('scripts')
@endsection
