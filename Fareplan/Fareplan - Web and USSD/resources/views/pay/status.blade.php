@extends("layouts.payment")
@section("content")
    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    @if(Session::has('transaction_accepted'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{session('transaction_accepted')}}</li>
{{--                                <br>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-2"></div>--}}
{{--                                    <div class="col-8">--}}

{{--                                        {!! Form::open(['method'=>'PATCH', 'action'=> ['TransactionStatusController@update', session('id')]]) !!}--}}

{{--                                        {!! Form::hidden('is_approved')!!}--}}
{{--                                        <div class="form-group">--}}
{{--                                            {!! Form::submit('Approve', ['class'=>'btn btn-outline-success btn-block']) !!}--}}
{{--                                        </div>--}}

{{--                                        {!! Form::close() !!}--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2"></div>--}}
{{--                                </div>--}}
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('transaction_failed'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{session('transaction_failed')}}</li>
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('sacco_exists'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{session('sacco_exists')}}</li>
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('transaction_approved'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{session('transaction_approved')}}</li>
                            </ul>
                        </div>
                    @endif
                    @include('includes.form_error')
                </div>
                <div class="col-2"></div>
            </div>
            {{Form::open(['action'=>'TransactionStatusController@store','method'=>'POST'])}}

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">

                    <div class="info-box">
                        <div class="info-box-content" style="display: flex;">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Phone number:</label>
                                    {!! Form::text('PhoneNumber', null, ['class'=>'form-control','placeholder' => 'Enter in format 2547...'])!!}
                                </div>
                            </div>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">

                    <div class="info-box">
                        <div class="info-box-content">
                            <div class="form-group">
                                <label for="">ACCT NO:</label>
                                {!! Form::select('vehicle_registration_number', [''=>'Choose Account number'] + $vehicles, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="info-box">
                        <div class="info-box-content">
                            <div class="form-group">
                                {!! Form::submit('CONFIRM', ['class'=>'btn btn-outline-info btn-block']) !!}
                            </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            {{Form::close()}}
        </div>
    </header>
@stop
