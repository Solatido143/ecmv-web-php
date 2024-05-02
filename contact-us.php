<?php
include_once('includes/header.php');
include_once('includes/navbar.php');
?>
<div class="wrapper">
    <div class="container2">
        <div class="contactus">
            <h4 class="my-3">Contact Us</h4>
            <div class="content">
                <form>
                    <div class="email mb-3">
                        <div class="text">Email <span style="color: red;">*</span></div>
                        <input type="email" name="email" id="email" required style="height: 35px; width: 90%;">
                    </div>
                    <div class="msg mb-3">
                        <div class="text">Message <span style="color: red;">*</span></div>
                        <textarea rows="2" cols="25" name="message" id="message" required style="height: 150px; width: 90%;"></textarea>
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger rounded py-2 px-4">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="bottom">
    <div class="d-flex justify-content-center footer-bottom align-items-center">
        <span class="credit">Copyright <a href="#">E-CMV I.T Corp.</a>&nbsp;|&nbsp;</span>
        <span class="far fa-copyright"></span><span> 2024</span>
    </div>
</div>
<script src="js/mailer.js"></script>
<script src="js/main.js"></script>
<script src="js/products.js" defer></script>
<script src="https://kit.fontawesome.com/cf9a2f60ee.js" crossorigin="anonymous"></script>
</body>
</html>