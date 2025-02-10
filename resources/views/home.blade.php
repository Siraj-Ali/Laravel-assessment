@extends('layouts.dashboardapp')
<style>
    .panel_toolbox>li>a {
    color: black !important;
    font-size: 17px !important;
}
</style>
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

      <div class="clearfix"></div>

      <div class="row" style="display: block;">

        <div class="clearfix"></div>



        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tasks List <small></small></h2>
              @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
              <ul class="nav navbar-right panel_toolbox">
                <li >
                  <a href="{{route('task.create')}}" class="" role="button" aria-expanded="false">Add <i class="fa fa-plus-square"></i></a>
                  
                </li>
              </ul>
              @endif
              
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                 @endif

              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">Priority </th>
                      <th class="column-title">Title </th>
                      <th class="column-title">Description </th>
                      <th class="column-title">Status </th>
                      <th class="column-title">Publish Date </th>
                      <th class="column-title no-link last"><span class="nobr">Action</span>
                      </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($tasks as $task)
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td class=" ">{{$task->priority}}</td>
                      <td class=" ">{{$task->title}} </td>
                      <td class=" ">{{$task->description}} <i class="success fa fa-long-arrow-up"></i></td>
                      @if ($task->status == 1)
                          <td class="badge badge-success">Active</td>
                      @else
                          <td class="badge badge-danger">In-Active</td>
                      @endif
                      
                      <td class=" ">{{$task->created_at}}</td>
                      <td class=" last">
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                          <a href="{{route('edit.task', $task->id)}}">
                            <i class="fa fa-edit" style="font-size:18px;color:green"></i></a> 
                        @endif
                        | 
                         <a href="{{route('pdf.task', $task->id)}}">
                           <i class="fa fa-download" style="font-size:18px;color:rgb(11, 136, 203)"></i></a> 

                        @if (Auth::user()->role_id == 1)
                        | <a onclick="return confirm('Are you sure?')" href="{{route('destroye.task', $task->id)}}">
                            <i class="fa fa-trash" style="font-size:18px;color:red"></i></a>
                        @endif
                      </td>
                    </tr>
                    
                      
                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
                      
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
