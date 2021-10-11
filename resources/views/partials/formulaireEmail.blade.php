
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form action="{{route('sendMail')}}" method="POST">
                        @csrf
                        <div class="container">
                            <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input  name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." />
                            <label for="name">Full name</label>
                    
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com"  />
                            <label for="email">Email address</label>
                            
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" />
                            <label for="phone">Phone number</label>
                            
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea  name="message" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" ></textarea>
                            <label for="message">Message</label>
                            
                        </div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                    </form>