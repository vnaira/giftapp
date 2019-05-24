@extends('layouts.app')

@section('header')
    @parent
@endsection

@section('content')
    <div class="col-md-8">
        <pre>
        {{ print_r(Session::all()) }}
            </pre>
        <div class="col-lg-12">
            <form method="post" action="{{route('profile')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="md-form">
                    <input placeholder="Selected date" name="try" type="text" id="date-picker-example" class="form-control datepicker" value="{{old('try')}}">
                    <label for="date-picker-example">Try me...</label>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="year">Year</label>
                        <select id="year" class="form-control" name="year">
                            <option selected disabled>Choose...</option>
                            @foreach($years as $y)
                                <option value="{{$y}}">{{$y}}</option>
                        @endforeach

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="month">Month</label>
                        <select id="month" class="form-control" name="month">
                            <option selected disabled>Choose...</option>
                            @foreach($months as $k => $m)
                                <option value="{{$k}}">{{$m}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="day">Day</label>
                        <select id="day" class="form-control" name="day">
                            <option selected disabled>Choose...</option>
                            @foreach($days as $d)
                                <option value="{{$d}}">{{$d}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h3>Gender</h3>
                <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{old('gender')}}>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                    <label class="form-check-label" for="female">
                       Female
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

@endsection