@extends('template.template2')

@section('title','Login')

@section('content')
    <div class="pasjoom-form-div">
        <div class="left-form inline">
            <form method="POST" action="{{ route('register') }}" class="pasjoom-form">
                @csrf
                <center style="height:90vh">
                <div class="container-form">
                    <div class="form-title inline">
                        <h3 style="font-weight:normal"><br>CREATE AN<br>ACCOUNT</h3>
                    </div>
                    <input class="pasjoom-input" placeholder="FULL NAME" name="name"/>
                    <input class="pasjoom-input" placeholder="EMAIL ADDRESS" name="email"/>
                    <input class="pasjoom-input" placeholder="STORE NAME" name="store"/>
                    <input class="pasjoom-input" placeholder="PASSWORD" name="password"/>
                    <input class="pasjoom-input" placeholder="CONFIRM PASSWORD" name="password_confirmation"/>
                    <div class="terms">
                        Creating an account means<br>you agree to<br>our <u>Terms</u> & Privacy <u>Policy</u>
                    </div>
                </div>
                <input type="submit" class="btn-pasjoom-form" value="SIGN UP" style="border-left:0.5px solid #707070;"/>
                </center>
            </form>
        </div>
        <div class="right-form inline">
            <form method="POST" action="{{ route('login') }}" class="pasjoom-form">
                @csrf
                <center style="height:90vh">
                <div class="container-form">
                    <div class="form-title inline">
                        <h3 style="font-weight:normal"><br>LOG IN<br><br></h3>
                    </div>
                    <input class="pasjoom-input" placeholder="USERNAME OR EMAIL ADDRESS" name="login-cred"/>
                    <input class="pasjoom-input" placeholder="PASSWORD" name="login-password"/>
                </div>
                <input type="submit" class="btn-pasjoom-form" value="LOG IN"/>
                </center>
            </form>
        </div>
    </div>
    
   
@endsection
