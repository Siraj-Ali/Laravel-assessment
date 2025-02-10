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
              <h2>Users <small></small></h2>
              
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                 @endif
                 @if(session()->has('error'))
                 <div class="alert alert-success">
                     {{ session()->get('error') }}
                 </div>
                  @endif

              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">Name </th>
                      <th class="column-title">Email </th>
                      <th class="column-title">Role </th>
                      <th class="column-title">Rejistered Date </th>
                      <th class="column-title no-link last"><span class="nobr">Action</span>
                      </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($users as $user)
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td class=" ">{{$user->name}} test</td>
                      <td class=" ">{{$user->email}} </td>
                      <td class=" ">{{$user->role}}</td>
                      <td class=" ">{{$user->created_at}}</td>
                      <td class=" last">
                        @if (Auth::user()->role_id == 1)
                          <a href="{{route('edit.user', $user->id)}}">
                            <i class="fa fa-edit" style="font-size:18px;color:green"></i></a> 
                         
                           
                        | <a onclick="return confirm('Are you sure?')" href="{{route('destroye.user', $user->id)}}">
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
