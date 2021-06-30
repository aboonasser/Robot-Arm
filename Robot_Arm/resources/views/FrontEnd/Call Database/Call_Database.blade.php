<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body style="background: darkgray">

<div class="topnav">
    <a class="active" href="/">Home</a>
    @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endguest
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-responsive-nav-link>
        </form>

        <a href="/user/profile">Profile</a>
    @endauth

</div>
<br><br>
@foreach ($calls   as $call)

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-gap: 10px;
            background-color: darkblue;
            padding: 10px;
        }

        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        .item1 {
            grid-column: 1 / span 2;
        }
    </style>


    <div class="grid-container">
        <div class="item1">  Name =>   {{$call->Name}} </div>
        <div class="item2">    Engine_1 =>    {{ $call->Engine_1}} <br> </div>
        <div class="item3">    Engine_2 =>   {{ $call->Engine_2}} <br></div>
        <div class="item4">    Engine_3 =>  {{ $call->Engine_3}} <br></div>
        <div class="item5">    Engine_4 => {{ $call->Engine_4}} <br></div>
        <div class="item6">    Engine_5 =>  {{ $call->Engine_5}}<br></div>
        <div class="item7">    Engine_6 => {{ $call->Engine_6}}</div>
    </div>
    <br>
    <br>

@endforeach
