@extends('admin.layouts.master')
@section('content')
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(['url' => route('user.store'), 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' =>'form-horizontal']) !!}
                <div class="box-body">
                    @if($errors->has('first_name'))
                    <div class="form-group has-error">
                        {!! Form::label('inputError3', 'First Name',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', '',[ 'name' => 'first_name','placeholder' => 'First Name' , 'id' => 'inputError3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('first_name') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputFirstEmail3', 'First Name',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', old('first_name'),[ 'name' => 'first_name','placeholder' => 'First Name' , 'id' => 'inputFirstEmail3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('last_name'))
                    <div class="form-group has-error">
                        {!! Form::label('inputLastEmail3', 'Last Name',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', '',[ 'name' => 'last_name','placeholder' => 'Last Name' , 'id' => 'inputLastEmail3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('last_name') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputLastEmail3', 'Last Name',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', old('last_name'),[ 'name' => 'last_name','placeholder' => 'Last Name' , 'id' => 'inputLastEmail3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('email'))
                    <div class="form-group has-error">
                        {!! Form::label('inputEmail3', 'Email',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', '',[ 'name' => 'email','placeholder' => 'Email' , 'id' => 'inputEmail3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputEmail3', 'Email',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', '',[ 'name' => 'email','placeholder' => 'Email' , 'id' => 'inputEmail3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('password'))
                    <div class="form-group has-error">
                        {!! Form::label('inputPassword3', 'Password',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('password', '',[ 'name' => 'password','placeholder' => 'Password' , 'id' => 'inputPassword3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputPassword3', 'Password',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('password', '',[ 'name' => 'password','placeholder' => 'Password' , 'id' => 'inputPassword3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('password_confirmation'))
                    <div class="form-group has-error">
                        {!! Form::label('inputRePassword3', 'Password Confirmation',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('password', '',[ 'name' => 'password_confirmation','placeholder' => 'Password Confirmation' , 'id' => 'inputRePassword3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputRePassword3', 'Password Confirmation',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('password', '',[ 'name' => 'password_confirmation','placeholder' => 'Password Confirmation' , 'id' => 'inputRePassword3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('birth_date'))
                    <div class="form-group has-error">
                        {!! Form::label('inputBirthDate', 'Birth Date',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::date('birth_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('birth_date') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputBirthDate', 'Birth Date',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::date('birth_date', old('birth_date'), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('description'))
                    <div class="form-group has-error">
                        {!! Form::label('inputDescription3', 'Description',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::textarea('description', '',[ 'placeholder' => 'Something About You' , 'id' => 'inputDescription3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputDescription3', 'Description',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::textarea('description',  old('description'),[ 'placeholder' => 'Something About You' , 'id' => 'inputDescription3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('phone'))
                    <div class="form-group has-error">
                        {!! Form::label('inputPhone3', 'Phone',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', '',[ 'name' => 'phone','placeholder' => 'Phone' , 'id' => 'inputPhone3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('phone') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputPhone3', 'Phone',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', old('phone'),[ 'name' => 'phone','placeholder' => 'Phone' , 'id' => 'inputPhone3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    @if($errors->has('address'))
                    <div class="form-group has-error">
                        {!! Form::label('inputAddress3', 'Address',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', '',[ 'name' => 'address','placeholder' => 'Address' , 'id' => 'inputAddress3', 'class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('address') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputAddress3', 'Address',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('text', old('address'),[ 'name' => 'address','placeholder' => 'Address' , 'id' => 'inputAddress3', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    @endif

                    <div class="form-group @if($errors->has('role')) has-error @endif">
                    {!! Form::label('inputRole3', 'Role',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('role', $roles, null, ['placeholder' => 'Pick a size...', 'id' => 'inputRole3', 'class' => 'form-control']) !!}
                        @if($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                    </div>

                    @if($errors->has('avatar'))
                    <div class="form-group has-error">
                        {!! Form::label('inputAvatar3', 'Avatar',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::file('avatar', ['id' => 'inputAvatar3', 'class' => 'form-control']) !!}
                            <img id="blah" src="#" alt="your image" style="width: 150px; height: 150px" />
                            <span class="help-block">{{ $errors->first('avatar') }}</span>
                        </div>
                    </div>
                    @else
                    <div class="form-group">
                        {!! Form::label('inputAvatar3', 'Avatar',['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::file('avatar', ['id' => 'inputAvatar3', 'class' => 'form-control' , 'value' => old('avatar')]) !!}
                            <img id="blah" src="{{ old('avatar', '#') }}" alt="your image" style="width: 150px; height: 150px" />
                        </div>
                    </div>
                    @endif

                </div>
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-info">Create</button>
                </div>
                <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
@stop

@push('js-page')
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#inputAvatar3").change(function() {
                readURL(this);
            });
        })
    </script>
@endpush