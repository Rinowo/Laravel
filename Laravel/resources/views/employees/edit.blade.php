@extends('employees.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit employee</h2>
        </div>
        <div class="col-lg-12 text center" style="margin-top: 10px; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emp Name:</strong>
                    <input type="text" name="emp_name"
                           value="{{ $employee->emp_name }}"
                           class="form-control" placeholder="employee Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emp Add:</strong>
                    <input type="text" name ="emp_add"
                           value="{{ $employee->emp_add }}"
                           class="form-control" placeholder="employee Add">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emp Phone:</strong>
                    <input type="number" name ="emp_phone"
                           value="{{ $employee->emp_phone }}"
                           class="form-control" placeholder="employee Phone">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emp Email:</strong>
                    <input type="email" name ="emp_email"
                           value="{{ $employee->emp_email }}"
                           class="form-control" placeholder="employee Email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Emp Salary:</strong>
                    <input type="number" name ="emp_salary"
                           value="{{ $employee->emp_salary }}"
                           class="form-control" placeholder="employee Salary">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
