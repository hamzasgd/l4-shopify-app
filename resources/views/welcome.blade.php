@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: a motherfucker</p>
    <div id="root"></div>
@endsection

@section('scripts')
    @parent

    <script src="{{asset('js/app.js')}}"></script> 

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
