@include('includes.header')
<div class="login-form-container active">
    <form  id="formAdminLogin" method="POST" action="/admin/login">
        @csrf
        <h3>URBAN DRIVE ADMIN LOGIN</h3>
        <input type="email" name="email" id="email" placeholder="Enter email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <input type="submit" value="login" class="btn">
    </form>
</div>

@include('includes.footer')