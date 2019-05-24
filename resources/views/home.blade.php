@extends('layouts.app')

        {{--@section('menu-bar')--}}
            {{--menubar--}}
            {{--@endsection--}}
@section('sidebar')
            <div class="col-md-4">
left
            </div>
        @endsection
        @section('content')
            <div class="col-md-8">
                content
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Description</th>
                                <th scope="col">Company</th>
                                <th scope="col">Available</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($giftlist as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->date}}</td>
                                    <td>{{$product->public ? 'Yes' : 'No'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        @endsection

<pre>
{{ print_r(Session::all()) }}
    </pre>
<form action="{{ route('giftlist') }}" method="post">
{{ csrf_field() }}
<!-- Modal create new list -->
    <div class="modal fade" id="newList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">@upperText(Create new list )</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-footer">
                        <div class="typebtn" id="forme" data-value="forme">For me</div>
                        <div class="typebtn"  id="forfriend" data-value="forfriend">For Friend</div>
                        <div class="typebtn" id="forchild" data-value = "forchild">For child</div>
                    </div>
                </div>
                <input type="hidden" id="listType" name="type" value="{{old('listType')}}">

            </div>
        </div>
    </div>

    <!-- Modal create new list -->
    <div class="modal fade" id="createNew" tabindex="-1" role="dialog" aria-labelledby="createNewList" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="createNewList">@upperText(Create new list )</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="listName">List Name</label>
                        <input type="text" class="form-control" id="listName" name="name" value="{{old('name')}}" placeholder="your list name">
                        <small id="listName" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class='col-sm-12'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" id='datetimepicker' name="date"/>
                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>

                    <!-- Material switch -->
                    <div class="form-group">
                    <label class="switch">
                        <p></p>
                        <input type="checkbox" name="public" checked>
                        <span class="slider round"></span>
                        <p>public</p>
                    </label>
                    </div>

                    {{--datepicker--}}
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</form>

