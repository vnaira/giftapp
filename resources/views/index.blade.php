@extends('layouts.app')

@section('header')
  @parent
    {{ $title }}
@endsection

@section('content')

    <div class="col-md-9">

        {{$now or $title}}

        @forelse($dataI as $item)
            <div class="col-lg-3">
                @if(count($data) > 3 )
                    bla bla bla
                @else
                @endif
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/>
                    <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>
                <h2>{{$item}}</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                    ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            @empty
            <p>no items</p>
            @endforelse
        <ul>
            @each('default.list',$data, 'value' )
        </ul>


    </div><!-- /.row -->

@endsection
@section('footer')
    @parent
@endsection