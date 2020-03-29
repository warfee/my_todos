@extends('layouts.newapp')

@section('content')

<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25" style="padding-bottom: 10em;">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" style="padding-bottom: 2em;">
                                            <div class="icon">
                                                <i class="fas fa-table"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$total_list_todos}}</h2>
                                                <span>Total Added To Do</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" style="padding-bottom: 2em;">
                                            <div class="icon">
                                                <i class="fas fa-table"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$total_undone_todos}}</h2>
                                                <span>Total Undone To Do</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" style="padding-bottom: 2em;">
                                            <div class="icon">
                                                <i class="far fa-check-square"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$total_done_todos}}</h2>
                                                <span>Total Done To Do</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                       

       
@endsection