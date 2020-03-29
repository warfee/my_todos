@extends('layouts.newapp')

@section('content')

<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Create To Do</h2>
                                
                                </div>
                            </div>
                        </div>
                      
                        <div class="row" style="margin-top: 2em;">
                           <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">New To Do</h3>
                                        </div>
                                        <hr>
                                        <form action="{{url('todos/store')}}" method="post" novalidate="novalidate">
                                            @csrf

                                            <input type="text" name="user_id" value="{{ Auth::user()->id }}" style="display: none;">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="title" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label mb-1">Description</label>
                                                <textarea name="description" rows="3"  class="form-control"></textarea>
                                            </div>

                                             <div class="form-group">
                                                <label class="control-label mb-1">Urgency</label>
                                                
                                                    <select name="urgency"class="form-control-sm form-control">
                                                        @foreach($urgencies as $urgency)
                                                        <option value="{{$urgency->id}}">{{$urgency->name}}</option>
                                                        @endforeach
                                                    </select>
                                        
                                            </div>
                                           
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Save</span>
                                                
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
@endsection