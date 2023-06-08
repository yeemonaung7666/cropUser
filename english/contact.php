<?php 
require '../init.php';

if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $name= $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    

    $query=query("insert into contact (name,email, subject, message) values (?,?,?,?)",
            [$name, $email, $subject, $message]);
    
    if($query){
        setMessage("Thanks For Your Suggestions!");
    }else{
        setError("Please Try Again!");
    }
}

require '../inc/header.php';
?>

    <!-- contact start -->
    <div class="contact-us">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3>Hello</h3>
                <p>If you have any problem or have any inconvenience while using our system , you can send a letter of recommendation. <br>
                <i>Please fill in the information correctly.  </i></p>
                
                <?php
                    showError();
                    showMessage();
                ?>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Name" name="name" require>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" require>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea rows="3" class="form-control msg-box" placeholder="Message" name="message" require></textarea>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="Send">
                    </div>
                </form>   
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <!-- contact end -->


<?php require '../inc/footer.php';?>

<script>
  var cross= document.querySelector("#cross");
  var hide_alert= document.querySelector("#hide_alert");
  cross.addEventListener('click', function(){
    hide_alert.remove();
  });
</script>