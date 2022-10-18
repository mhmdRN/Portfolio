<div class="col-10 d-lg-flex justify-content-around align-items-center mt-lg-0 shadow-lg text-center text-white rounded">
    <div class="my-3"> 
        <h4><i class="bi bi-envelope"></i> Email:</h4>
        <p>mohammadramadan1x@gmail.com</p>  
        <h4><i class="bi bi-phone"></i>Call:</h4>
        <p>76 753 789</p>
    </div>         
        <form action="{{route("contact")}}" class="my-3" method="POST" id="contact_save">
                    @csrf
                    <h2>Get in Touch</h2>
                        <div id="alert"></div>

                    <div class="row">
                        <div class="col-md form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                        </div>
                        <div class="col-md form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-primary btn-lg mt-3" type="submit" name="button">Send Message</button>
        </form>
</div>
<script>
    $( "#contact_save" ).on( "submit", function(e) {
        e.preventDefault();
        var dataString = $(this).serialize();
        $("[name='button']").addClass("disabled");
        $("[name='button']").html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
        `);
        $.post($(this).attr('action'),dataString,function(){
             $('#alert').html(
            `<div class="alert alert-success alert-dismissible" role="alert">
               <div>Your mail is sent!! Thank You.</div>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`
            );
            $("[name='button']").text("Send Message");
            $("[name='button']").removeClass("disabled");
        });
    });
</script>