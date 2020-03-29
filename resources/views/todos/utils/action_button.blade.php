 <div style="float: right;">
    <a href="{{url('/todos/'.$todo->id.'/view')}}">
    	<button  type="button" class="btn btn-primary btn-sm">View</button>
    </a>
    <a href="{{url('/todos/'.$todo->id.'/edit')}}">
    	<button  type="button" class="btn btn-secondary btn-sm">Edit</button>
    </a>
</div>