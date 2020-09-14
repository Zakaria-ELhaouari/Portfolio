<?php
include_once './sendMail.php';
?>

<div class="main-container">
    <section class="contact section">

        <div class="container">
            <div class="rowA">
                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <h3 class="sendM"><?php send_mail_php() ?></h3>
            
            <form id="formSend" class="contact-form" method="POST">
                <div class="form-group">
                    <div class="form-item">
                        <input id="name" type="text" name="name" class="name" placeholder="Enter Name..." required>
                    </div>
                    <div class="form-item">
                        <input id="email" type="email" name="email" class="email" placeholder="Enter Email..." required>
                    </div>
                    <div class="form-item">
                        <input name="Subject" id="Subject" type="text" class="text" placeholder="Enter Subject..." required>
                    </div>
                    <div class="form-item">
                        <textarea name="Message" id="Message" type="text" placeholder="Enter Message..." required></textarea>
                    </div>
                </div>
                <div>
                    <button id="btnSub" class="btn send" type="submit" name="submit" style="background-color: red;">Send Message</button>
                </div>
            </form>
        </div>
    </section>

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/jquery.min.js"></script> -->


<script type="text/javascript">
        // const name = document.querySelector("#name");
        // const email = document.querySelector("#email");
        // const Subject = document.querySelector("#Subject");
        // const Message = document.querySelector("#Message");
        // const form = document.querySelector("#formSend");
        // const btnSub = document.querySelector("#btnSub");
        
        // btnSub.addEventListener('click', part);

        // function part() {
		// 	let xhr = new XMLHttpRequest;
		// 	xhr.open('POST', '../sendMail.php', true)
		// 	xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded')
		// 	xhr.responseType = 'text';
        //     xhr.onload = function() {
        //         console.log(xhr.response);
		// 		console.log(xhr.responseText);
		// 	}
		// 	let infoPart = `name=${name.value}&email=${email.value}&Subject=${Subject.value}&Message=${Message.value}`;		
		// 	xhr.send(infoPart);
            
		// }
</script>