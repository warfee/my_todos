@extends('layouts.newapp')

@section('content')

                      
                        <div class="row" style="margin-top: 2em;">
                           <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit To Do</h3>
                                        </div>
                                        <hr>
                                        <form action="{{url('todos/'. $todo->id)}}" method="post" novalidate="novalidate">
                                            @csrf
                                            {{ method_field('put') }}

                                        
                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$todo->title}}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label mb-1">Description</label>
                                                <textarea name="description" rows="3"  class="form-control">{{$todo->description}}</textarea>
                                            </div>

                                             <div class="form-group">
                                                <label class="control-label mb-1">Urgency</label>
                                                
                                                    <select name="urgency"class="form-control-sm form-control">
                                                        @foreach($urgencies as $urgency)

                                                        <option value="{{$urgency->id}}" {{ $todo->urgency == $urgency->id ? 'selected="selected"' : '' }}>{{$urgency->name}}</option>
                                                    
                                                        @endforeach
                                                    </select>
                                        
                                            </div>
                                               <div class="form-group">
                                                <label class="control-label mb-1">Status</label>

                                                  <div class="form-check">
                                                        <div class="radio">
                                                            <label class="form-check-label ">
                                                                <input type="radio" name="status" value="1" {{$todo->status == '1' ? 'checked' : ''}} class="form-check-input">Done
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="form-check-label ">
                                                                <input type="radio" name="status" value="0" {{$todo->status == '0' ? 'checked' : ''}} class="form-check-input">Undone
                                                            </label>
                                                        </div>
                                                       
                                                    </div>
                                        
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