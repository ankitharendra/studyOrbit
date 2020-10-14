<?php require_once("header.php");?>

<div class="login_form_div">
    <form action="home.php" method="POST" id="login_form">
        <div class="user_id_div">
            <div>
                <label for="login_id" class="user_id_label">User ID</label>
            </div>
            <div>
                <input type="text" id="login_id" name="login_id" class="form-control user_id" placeholder="Enter the User ID"/>
            </div>
        </div>
        <div class="user_password_div">
            <div>
                <label for="login_password" class="user_password_label">Password</label>
            </div>
            <div>
                <input type="password" id="login_password" name="login_password" class="user_password" placeholder="Enter the Password"/>
            </div>
        </div>
        <div class="remember_me_div">
            <input type="checkbox" id="remember_me" name="remember_me" value="remember_me" class="remember_me_check"/>
            <label for="remember_me" class="remember_me_label">Remember Me</label>
        </div>
        <div>
            <button type="button" id="login_button" name="login_button" class="login_btn">Login</button>
        </div>
    </form>
</div>
<!-- 
<script>
    $(document).ready(function() {
        $('#share_button').click(function() {
            const text_v = $('#text_field').val();
            // const image_fi = $('#image_file').val();
            const frm_data = new FormData(document.getElementById('file_share'));
            $.ajax({
                url: "ajax_test.php",
                method:"POST",
                data: {
                    text_value: frm_data
                },
                success: function(r) {
                    console.log("success"+r);
                }
            })
        })
    })
</script> -->

<?php require_once("footer.php");?>