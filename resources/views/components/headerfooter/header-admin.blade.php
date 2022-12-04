<div class="nav">
    <form action="/logout" method="post" >
        @csrf
        <button class="logout-button" type="submit" style="cursor:pointer; height:79px;font-family: 'Open Sans', sans-serif;">LOGOUT</button>
    </form>
    <div class="content-margin">
        <input type="checkbox" id="nav-check">

        <div class="nav-header">
            <div class="nav-title">
                {{-- <img src="../images/24chicken-logo.png" id="logo"> --}}
                <img src="{{ asset('images/24chicken-logo.png') }}" id="logo">
                <p>Hello, <span id="red">{{ auth()->user()->firstname }}</span>!</p>
            </div>

        </div>

        <div class="nav-btn">
            <label for="nav-check">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </label>
        </div>

        <div class="nav-links">

            <a href="{{ route('adminpage.index') }}">Menu</a>
        </div>
    </div>

</div>
