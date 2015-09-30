<?php 

	include 'header.php'
?>
<div class="register_form">    
        
        <div id="subscribe">
            <form  action="notify_script.php" autocomplete="on">
                <h1> Sign in </h1>
                <p>
                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="notifyee name" />
                </p>
                <p>
                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                    <input id="emailsignup" name="emailsignup" required="required" type="text" placeholder="something@notyfi.com"/>
                </p>
                <p>
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="mother"/>
                </p>
                <p>
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm your password </label>
                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="mother"/>
                </p>
                <p class="signin_btn">
                    <input type="submit" value="Sign up"/>
                </p>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php'?>