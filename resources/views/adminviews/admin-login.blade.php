@include('includes.header')
<div class="login-form-container active">
    <form  id="formAdminLogin1" method="POST" action="">
            @csrf
            <h3>URBAN DRIVE ADMIN LOGIN</h3>
            <h5 id="adminLoginResp1"></h5>
            <input type="email" name="email" id="email" placeholder="Enter email" class="box">
            <input type="password" name="password" placeholder="password" class="box">
            <input type="submit" value="login" class="btn">
    </form>
</div>

@include('includes.footer')