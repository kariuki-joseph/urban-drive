@include('includes.header')
<div class="login-form-container active">
    <form  id="formAdminLogin" method="GET" action="/admin">
        <h3>URBAN DRIVE ADMIN LOGIN</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="submit" value="login" class="btn">
    </form>
</div>

@include('includes.footer')