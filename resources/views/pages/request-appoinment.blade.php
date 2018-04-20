@extends('layouts.index')

@section('content')
    <section class="appointment-sec">
        <div class="container">
            <h1>Request for an appointment</h1>

            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <span>First Name</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-wrp">
                            <span>Last Name</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-wrp">
                            <span>Contact Number</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-wrp">
                            <span>Email</span><br>
                            <input type="email" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <span>Why do you want to make an appointment?</span><br>
                            <textarea rows="5"></textarea>
                        </div>
                        <div class="input-wrp">
                            <span>What is the date that you want to make an appointment?</span><br>
                            <input type="date">
                        </div>
                        <div class="input-wrp">
                            <span>Which time do you want to make an appointment?</span><br>
                            <input type="time">
                        </div>
                    </div>
                </div>

                <button>Request</button>
            </form>
        </div>
    </section>
@endsection