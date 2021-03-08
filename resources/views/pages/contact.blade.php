<?php


?>


@extends('pages.master')

@section('title', 'Contact')

@section('content')

<body>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                
                    <h1 class="contact-h1">Contact Us</h1>

                <form id="myform" onsubmit="return validation()">
                
                <ul>
                    <div class="error" id="error_message"></div>
                    <li><label for="">Name: </label> <input class="ziki" id="name" type="text"></li>
                    <li><label for="">Email: </label> <input class="ziki" id="email" type="text"></li>
                    <li><label for="">Phone: </label> <input class="ziki" id="phone" type="text"></li>
                    <li><label for="">Role: </label> <input type="radio" name="role" value="student"> Student
                        <input type="radio" name="role" value="teacher"> Teacher<br></li>
                    <li><label for="">City: </label><select name="" id="">
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Sahiwal">Sahiwal</option>
                    </select></li>
                    <li><label class="message" for="">Message: </label></li>
                    <li><textarea class="ziki" name="" id="message" cols="30" rows="15"></textarea></li>
                    <li><button class="btnz">Submit</button></li>
                </ul>
            </form>
               </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-address">
                    <h1>Address</h1>
                    <h3>The University Of Lahore</h3>
                    <h3>1- Km Raiwind Rd, Sultan Town</h3>
                    <h3>Lahore, Punjab</h3>
                </div>

                <div class="contact-map">
                    <h1>Location</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8484843430397!2d74.23880001497074!3d31.390741081412763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901e6e30bb94b%3A0x7facd7c9c099672b!2sUniversity%20Of%20Lahore!5e0!3m2!1sen!2s!4v1603818910111!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
</body>
@endsection
