<?php
/**
 * Template Name: join us
 */
get_header();
?>
<div class="container p-3 my-5" style="background-color: rgb(209, 209, 209);">
    <div>
        <h1 class="text-center m-5"> Add Restaurant </h1>
    </div>
    <div>
        <form id="add_r_form" class="container text-center w-100 mx-auto row g-3" >
                <div class="col-md-12 m-2">
                    <label for="name" class="form-label">Restaurant Name</label>
                    <input type="text" class="form-control form-border" id="inputEmail4" name="name" required>
                </div>
                <div class="col-md-12 m-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-border" id="inputPassword4" name="email" required>
                </div>
                <div class="col-12 m-2">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control form-border" id="inputAddress" >
                </div>
                <div class="col-12 m-2">
                    <label for="inputAddress" class="form-label">Select Type of Food <span>(*use crtl for multiple selection)</span></label>
                    <select class="col-12 m-2" aria-label=".form-select-lg example" multiple>
                        <option selected  disabled>Open this select menu</option>
                        <option value="1" aria-multiselectable="true">Punjabi</option>
                        <option value="2" aria-multiselectable="true">Gujarati</option>
                        <option value="3">South Indian</option>
                        <option value="4">Pizza</option>
                        <option value="5">Kathyavadi</option>
                        <option value="6">Fast Food</option>
                      </select>
                </div>
                <div class="col-12 m-2">
                    <label for="table" class="form-label ">Number Of</label>
                </div>
                <div class="col-md-4 ">
                    <input type="number" min="0" class="form-control form-border" placeholder="4 person table">
                </div>
                <div class="col-md-4">
                    <input type="number" min="0" class="form-control form-border" placeholder="6 person table">
                </div>
                <div class="col-md-4">
                    <input type="number" min="0" class="form-control form-border" placeholder="8 person table">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="inputAddress" class="form-label">Restaurant image</label>
                    <input type="file" class="form-control form-border">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="inputAddress" class="form-label">Menu</label>
                    <input type="file" class="form-control form-border" multiple> 
                </div>
                <div class="col-12 m-4 ">
                    <button type="submit" class="btn2 w-25 register">Register</button>
                </div>
            </form>
    </div>
</div>

<?php
get_footer();