@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-md-12">
    
        <form id="jvalidate" role="form" class="form-horizontal" method="POST" action="/tourpacket/create" >
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Paket Tour</strong> Form</h3>
                <!-- <ul class="panel-controls">
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul> -->
            </div>
            <div class="panel-body">
                <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
            </div>
            <div class="panel-body">                                                                        
                
                <div class="row">
                    
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Paket Tour</label>
                            <div class="col-md-9">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" name="name"/>
                                </div>   
                                <label id="name-error" class="error" for="name" style="display: none"></label>                                         
                                <span class="help-block">required, min size = 2, max size = 100</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Destinasi</label>
                            <div class="col-md-9">                                                                                
                                <select class="form-control select" data-live-search="true" name="destination_id">
                                @foreach($destination as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                                </select>
                                <label id="destination_id-error" class="error" for="destination_id" style="display: none"></label>
                                <span class="help-block">required</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Harga</label>
                            <div class="col-md-9">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                    <input type="text" class="form-control" name="price"/>
                                </div>
                                <label id="price-error" class="error" for="price" style="display: none"></label>                                            
                                <span class="help-block">required, in rupiah</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Jumlah Peserta</label>
                            <div class="col-md-9">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-users"></span></span>
                                    <input type="text" class="form-control" name="slot"/>
                                </div>
                                <label id="slot-error" class="error" for="slot" style="display: none"></label>                                            
                                <span class="help-block">required, in number</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">                                        
                            <label class="col-md-3 control-label">Start Date</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="" name="start_date">                                            
                                </div>
                                <label id="start_date-error" class="error" for="start_date" style="display: none"></label>
                                <span class="help-block">required</span>
                            </div>
                        </div>

                        <div class="form-group">                                        
                            <label class="col-md-3 control-label">End Date</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="" name="end_date">                                            
                                </div>
                                <label id="end_date-error" class="error" for="end_date" style="display: none"></label>
                                <span class="help-block">required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Keterangan</label>
                            <div class="col-md-9 col-xs-12">                                            
                                <textarea class="form-control" rows="5" name="notes"></textarea>
                                <span class="help-block">optional</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            <div class="panel-footer">
                <button class="btn btn-default">Clear Form</button>                                    
                <button class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
        </form>
        
    </div>
</div>


@endsection

@section('js')
<script type="text/javascript" src="{{asset('assets/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
<script type="text/javascript" src="{{asset('assets/js/plugins/bootstrap/bootstrap-select.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script type="text/javascript">
    var jvalidate = $("#jvalidate").validate({
        ignore: [],
        rules: {  
                name: {
                        required: true,
                        minlength: 2,
                        maxlength: 100
                },                                          
                destination_id: {
                        required: true
                },
                price: {
                        required: true,
                        number: true,
                        min: 100000
                },
                slot: {
                        required: true,
                        number: true
                },
                start_date: {
                        required: true,
                        date: true
                },
                end_date: {
                        required: true,
                        date: true
                }
            }                                        
        });                                    

</script>
@endsection