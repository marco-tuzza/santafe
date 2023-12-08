@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Menu</h1>
            <p>Here is the menu structure:</p>
            <ul>
                @foreach ($submenus as $submenu)
                    <li>{{ $submenu->name }}</li>
                    <div>
                        <ul>
                            @foreach ($submenu->categories as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
