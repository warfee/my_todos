@extends('layouts.newapp')

@section('content')


                      
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Done To Do</h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks done by {{ Auth::user()->name }}</p>
                                        </div>

                                       
                                    
                                        <div class="au-task-list js-scrollbar3">

                                            @foreach($todos as $todo)
                                            @if($todo->urgency == 1)
                                            <div class="au-task__item au-task__item--danger">
                                                 <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                       
                                                </div>
                                            </div>
                                            @elseif($todo->urgency == 2)
                                             <div class="au-task__item au-task__item--warning">
                                                 <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                              
                                                </div>
                                            </div>
                                            @elseif($todo->urgency == 3)
                                            <div class="au-task__item au-task__item--primary">
                                                 <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                                 
                                                </div>
                                            </div>
                                            @else
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                          
                                                </div>
                                            </div>
                                            @endif
                                             @endforeach
                                           
                                        </div>

                                       
                                    
                                    </div>
                                </div>
                            </div>
                        
                        </div>
@endsection