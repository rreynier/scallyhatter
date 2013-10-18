<div id="login">
    <div id="info">
        
        <h1><img src="/assets/images/ship.png" alt="Ship" /> Web Site Administration Portal</h1>
        <h2>Please Login</h2>
        <p>If you are unable to login or forgot your username / password, please contact <a href="mailto:support@bythepixel.com">support@bythepixel.com</a></p>
    </div>
    <?php
        echo form_open('admin/user/verify');
        echo '<ul>';

        echo '<li class="small">';
        echo form_label('User Name','user');
        echo form_input('user','','id="user"');
        echo '</li>';

        echo '<li class="small">';
        echo form_label('Password','pass');
        echo form_password('pass','','id="pass"');
        echo '</li>';

        echo '<li>';
        echo form_submit('submit','Login','class="submit"');
        echo '</li>';

        echo '</ul>';
        echo form_close();
    ?>

</div>

