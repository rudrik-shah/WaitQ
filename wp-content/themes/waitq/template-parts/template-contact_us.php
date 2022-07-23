<?php
/**
 * Template Name: contact us
 */
get_header();
?>

<div class="container w-100 mx-auto" >
        <form action="#"  class="container text-center w-100 mx-auto" id="form" name="form">
            <div>
                <h2 class="text-center ">We would love to hear from you!</h2>
            </div>
            <hr>
            <div class="mt-2 ">
                <input type="text"  placeholder="Name" required>
            </div>
            <div class="mt-3">
                <input type="email"  placeholder="Email" required>
            </div>
            <div class="mt-3">
                <input type="phone"  placeholder="Phone Number (Optional)">
            </div>
            <div class="mt-3" >
                <textarea id="subject" name="subject" placeholder="Comments..." style="width: 33%; height:200px"></textarea>
            </div>
            <div class="mt-1 w-25 mx-auto">
                <button type="submit" class="btn1 w-100 ">SUBMIT</button>
            </div>
            
        </form>
    </div>
    <hr>
    <div class="container w-100 mx-auto text-center">
        <h1>For any query, you can contact us !!</h1>
    </div>
    <h4 class="text-center">Contact Number: +91 12345 67899 | <span class="">Email Id: waitq_support@waitq.com</span></h4>

<?php
get_footer();