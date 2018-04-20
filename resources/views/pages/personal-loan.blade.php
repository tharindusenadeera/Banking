@extends('layouts.index')

@section('content')
    <section class="personal-loan-banner-sec">
        <img src="{{ asset('/custom/images/banner-personal-loan2.jpg') }}" class="img-responsive">
    </section>
    <section class="personal-loan-content">
        <div class="container">
            <h1>Personal Loans</h1>
            <p>Get a step closer to your dreams and goals by availing our Personal Loans and meet your financial needs.
                You can avail a personal loan to meet unexpected expenses, a dream holiday, school or college fees, wedding
                expenditure, home improvement expenses or even purchase of consumer durables.</p>

            <ul>
                <li>Simplified documentation</li>
                <li>Competitive pricing </li>
                <li>Transparency</li>
                <li>Personal loans available for various needs</li>
            </ul>

            <button onclick="openNav()">Apply Online</button>

            <p>Want to meet our member?  <a href="{{url('/appoinment')}}">Request an Appointment </a></p>
        </div>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <div class="col-sm-push-2 col-sm-8">
                    <div class="loan-form-content">
                        <form class="loanForm" action="#">
                            <h1>Enter Your Details</h1>
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <h2>Step 01</h2>
                                Title<br>
                                <select>
                                    <option>Mr</option>
                                    <option>Miss</option>
                                    <option>Mrs</option>
                                </select><br>
                                First Name
                                <p><input  oninput="this.className = ''" name="fname"></p>
                                Last Name
                                <p><input  oninput="this.className = ''" name="lname"></p>
                                NIC Number
                                <p><input  oninput="this.className = ''" ></p>
                                Email Address
                                <p><input  oninput="this.className = ''" type="email" name="email"></p>
                                Contact Number
                                <p><input  oninput="this.className = ''" name="phone"></p>
                                Address<br>
                                <p><textarea oninput="this.className = ''"></textarea></p><br>
                                Resident Address<br>
                                <p><textarea oninput="this.className = ''"></textarea></p><br>
                                Civil Status<br>
                                <select>
                                    <option>Single</option>
                                    <option>Married</option>
                                </select><br>
                            </div>
                            <div class="tab">
                                <h2>Step 02</h2>
                                Passport Number
                                <p><input name="#" type="text" ></p>
                                Nationality
                                <p><input  oninput="this.className = ''" type="text" ></p>
                                Are you an existing customer?<br>
                                <p><input class=radio_type type="radio"  value="yes" checked> Yes<br>
                                    <input class=radio_type type="radio"  value="no"> No<br></p>
                                If Yes, Please enter your Account Number
                                <p><input placeholder="Account Number"  ></p>
                                Do you have accounts in other Banks?<br>
                                <p><input class=radio_type type="radio"  value="yes" checked> Yes<br>
                                    <input class=radio_type type="radio"  value="no"> No<br></p>
                                If Yes, Please enter Bank and the Account number
                                <p><input placeholder="Bank Name" class="half"  >
                                    <input placeholder="Account Number"  class="half"  ></p>
                                <p><input placeholder="Bank Name"  class="half" >
                                    <input placeholder="Account Number"  class="half"  ></p>
                            </div>
                            <div class="tab">
                                <h2>Step 3</h2>
                                If you taken loans previously please enter the details<br>
                                <p><textarea></textarea><br></p>
                                Reason for applying for loan<br>
                                <select>
                                    <option>Personal</option>
                                    <option>Educational</option>
                                    <option>Housing</option>
                                    <option>Vehicle</option>
                                    <option>Business</option>
                                </select><br>
                                Amount of Loan (Rs.)
                                <p><input   oninput="this.className = ''" ></p>
                                Monthly income - primary (Rs.)
                                <p><input   oninput="this.className = ''" ></p>
                                Monthly income - Other (Rs.)
                                <p><input   oninput="this.className = ''" ></p>
                            </div>
                            <div class="tab">
                                <h2>Step 04</h2>
                                Repayment period (In Months)
                                <p><input   oninput="this.className = ''" ></p>
                                Monthly Installment (Rs.)
                                <p><input   oninput="this.className = ''" ></p>
                            </div>
                            <div class="tab">
                                <h2>Step 05</h2>
                                Upload Your NIC copy
                                <input  type="file" name="file"><br>
                                Upload your Salary sheet for last 3 months
                                <input  type="file" name="file">
                            </div>

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection