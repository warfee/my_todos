@extends('layouts.newapp')

@section('content')

                      
                        <div class="row" style="margin-top: 2em;">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>List To Do</h3>
                                        <a href="{{url('/todos/create')}}">
                                            <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        </a>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks will do by {{ Auth::user()->name }}</p>
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
                                                   @include('todos.utils.action_button')
                                                </div>
                                            </div>
                                            @elseif($todo->urgency == 2)
                                             <div class="au-task__item au-task__item--warning">
                                                 <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                                    @include('todos.utils.action_button')
                                                </div>
                                            </div>
                                            @elseif($todo->urgency == 3)
                                            <div class="au-task__item au-task__item--primary">
                                                 <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                                    @include('todos.utils.action_button')
                                                </div>
                                            </div>
                                            @else
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">{{$todo->title}}</a>
                                                    </h5>
                                                    <span class="time">{{$todo->description}}</span>
                                                    @include('todos.utils.action_button')
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