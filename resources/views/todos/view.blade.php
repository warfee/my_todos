@extends('layouts.newapp')

@section('content')

                      
                        <div class="row" style="margin-top: 2em;">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">


                                    @if($todo->urgency == 1 )
                                    <div class="au-card-title" style="background-color: red;">
                                       
                                        <h3>
                                            <i class="fa fa-th-list"></i>{{$todo->title}}</h3>
                                       
                                    </div>
                                    @elseif($todo->urgency == 2 )
                                    <div class="au-card-title" style="background-color:orange;">
                                        
                                        <h3>
                                            <i class="fa fa-th-list"></i>{{$todo->title}}</h3>
                                       
                                    </div>
                                    @elseif($todo->urgency == 3 )
                                    <div class="au-card-title" style="background-color: blue;">
                                        
                                        <h3>
                                            <i class="fa fa-th-list"></i>{{$todo->title}}</h3>
                                       
                                    </div>
                                    @else
                                    <div class="au-card-title" style="background-color: green;">
                                      
                                        <h3>
                                            <i class="fa fa-th-list"></i>{{$todo->title}}</h3>
                                       
                                    </div>

                                    @endif
                                     <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Date Created : {{$todo->created_at}}</p>
                                            <p>Status : 
                                                @if($todo->status == 0)
                                                    Undone
                                                @else
                                                    Done
                                                @endif
                                            </p>
                                            <p>Urgency :

                                                @if($todo->urgency == 1)
                                                Urgent & Important
                                                @elseif($todo->urgency == 2)
                                                Urgent & Not Important
                                                @elseif($todo->urgency == 3)
                                                Not Urgent & Important
                                                @elseif($todo->urgency == 4)
                                                Not Urgent & Not Important
                                                @else
                                                Unassigned

                                                @endif

                                            </p>
                                        </div>
                                        <div class="au-task__title">
                                            <p>{{$todo->description}}</p>
                                        </div>
                                   

                                 

                                       
                                    
                                    </div>
                                </div>
                            </div>
                        
                        </div>
@endsection