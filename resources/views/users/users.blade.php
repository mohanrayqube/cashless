<?php $title = "Dashboard"; ?>
@extends('layouts.master')
@section('content')   
  <div class="mg-t-30">
    <div class="container-fluid">
      <div class="row">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div><br />
        @endif 
        <div class="product-status mg-b-15">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                  <h4>Users List</h4>                  
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-sales-chart">
              <div class="portlet-title">
                <!-- <div class="sparkline12-hd">
                  <div class="main-sparkline12-hd form-group-inner col-sm-11">
                      <h1> <span class="password-mt-none">Sheet</span></h1>
                      <hr>
                  </div>
                  <div class="main-sparkline12-hd form-group-inner col-sm-1">
                      <a href="" style="" id="dailysheetSubmit"><i class="fa fa-plus" aria-hidden="true"></i> Add LogSheet</a>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-form-element-inner">  
                      <div class="table-responsive"><ul>
                        <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                            <table data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" data-sort-name="stargazers_count" data-sort-order="desc">
                              <thead>
                              <tr>
                                <th data-field="SrNumber" data-sortable="true">SR. No.</th>
                                <th data-field="Name" data-sortable="true">Name</th>
                                <th data-field="Email" data-sortable="true">Email</th>
                                <th data-field="MobileNumber" data-sortable="true">Mobile Number</th>
                                <th data-field="Address" data-sortable="true">Address</th>                            
                                <th data-field="action" data-sortable="true" style="">Action</th>                              
                              </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $users_key => $users_value)
                                  <tr>
                                    <td>{{$users_key+1}}</td>
                                    <td>{{$users_value->name}}</td>
                                    <td>{{$users_value->email}}</td>
                                    <td>{{$users_value->mobile_number}}</td>
                                    <td>{{$users_value->address}}</td>
                                    <td></td>
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
            </div>    
          </div>

          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-sales-chart">
              <div class="portlet-title">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd form-group-inner col-sm-9">
                        <h1>Daily Log<span class="password-mt-none">Sheet</span></h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-form-element-inner">        
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                            <th>Project Name </th>
                            <th>(id) Task Name</th>
                            <th>Discription</th>
                            <th>Start</th>
                            <th>End</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                          </table>
                        </div>
                        <hr>
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div> -->    
        </div>
      </div>
    </div>








@stop
