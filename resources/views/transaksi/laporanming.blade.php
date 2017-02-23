@extends('master')

@section('content')

				
            <div class="row-fluid" style="margin-top:20px; ">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="cmxform form-horizontal" action="{{ url('laporan/mingguan/report') }}" method="GET">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                       
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">Dari</label>
                                    <div class="controls">
                                      <input type="date" name="from" class="form-control" placeholder="Dari" value="02/22/2017">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="username" class="control-label">Sampai</label>
                                    <div class="controls">
                                      <input type="date" name="to" class="form-control" placeholder="Sampai">
                                    </div>                                      
                                </div>
                                <button class="btn btn-success" type="submit">OK</button></form>

                                

                            
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>



@endsection