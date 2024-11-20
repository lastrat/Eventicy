@extends('admin.layouts.master')
@section('title', 'Eventicy | Dashboard')

@section('page_css')
    <style>
        /* Custom styling for cards */
        .dashboard-card {
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .dashboard-card p {
            font-size: 16px;
            font-weight: 600;
        }

        .dashboard-card a {
            text-decoration: none;
            font-weight: bold;
        }

        /* Activities list */
        .recent-activities .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
            border-radius: 8px;
        }

        .recent-activities .list-group-item span {
            font-size: 12px;
            font-weight: bold;
            color: #666;
        }
    </style>
@stop

@section('content')
<div class="right_col">
    <div class="container-fluid">
        <!-- Dashboard Header -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h1 class="mb-4">Admin Dashboard</h1>
                <p class="lead">Welcome back, Admin!</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="dashboard-card bg-primary">
                    <h2>120</h2>
                    <p>Total Events</p>
                    <a href="#" class="text-black" style="color: black">View Details</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="dashboard-card" style="background-color: rgb(27, 142, 27)">
                    <h2>3,452</h2>
                    <p>Tickets Sold</p>
                    <a href="#" class="text-black" style="color: black">View Details</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="dashboard-card" style="background-color: rgb(116, 117, 12)">
                    <h2>85</h2>
                    <p>Active Lines</p>
                    <a href="#" class="text-black" style="color: black">Manage Lines</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="dashboard-card" style="background-color: deepskyblue">
                    <h2>15</h2>
                    <p>Pending Votes</p>
                    <a href="#" class="text-black" style="color: black">View Votes</a>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0" style="padding: 15px;">Recent Activities</h5>
                    </div>
                    <div class="card-body recent-activities">
                        <ul class="list-group">
                            <li class="list-group-item">
                                New event "Tech Summit 2024" created
                                <span>5 hours ago</span>
                            </li>
                            <li class="list-group-item">
                                50 tickets sold for "Music Fest 2023"
                                <span>1 day ago</span>
                            </li>
                            <li class="list-group-item">
                                New vote session started for "Startup of the Year"
                                <span>2 days ago</span>
                            </li>
                            <li class="list-group-item">
                                Event "Sports Gala" canceled by admin
                                <span>1 week ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
