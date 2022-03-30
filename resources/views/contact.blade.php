@include('includes.header')
<section class="contact" id="contact">

<h1 class="heading"><span>contact</span> us</h1>

<div class="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127670.42232412015!2d36.88266063602857!3d-0.4399544712879931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18285dfed09e0ebf%3A0x829716f702f65e9e!2sNyeri!5e0!3m2!1sen!2ske!4v1647343044358!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
    <!-- Form handled via javascript --->
    <form id="formContact" method="POST" action="">
        @csrf
        <h3>get in touch</h3>
        <h4 id="contactResp" style="display:none"></h4>
        <input type="text" name="username" placeholder="Your name" class="box" required>
        <input type="email" name="email" placeholder="Your email" class="box" required>
        <input type="text"  name="subject" placeholder="subject" class="box" required>
        <textarea placeholder="Enter message here..." name="message" class="box" cols="30" rows="10" required></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</div>

</section>
@include('includes.footer')