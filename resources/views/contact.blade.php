<x-layout>
    @slot('title', 'Home')


        @slot('body')

            
        
        
            <!-- ##### Welcome Area Start ##### -->
            <div class="breadcumb-area clearfix dzsparallaxer auto-init mode-scroll animation-engine-js dzsprx-readyall">                
                <!-- breadcumb content -->
                <div class="breadcumb-content">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                                    <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Contact Us</h2>
                                    <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Welcome Area End ##### -->
        
            <!-- ##### Contact Area Start ##### -->
            <section class="section-padding-100 contact_us_area" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <!-- Dream Dots -->
                                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Contact With Us</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Contact Form -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <div class="contact_form">
                                <form action="#" method="post" id="main_contact_form" novalidate="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="success_fail_info"></div>
                                        </div>
        
                                        <div class="col-12 col-md-6">
                                            <div class="group wow fadeInUp" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                                <input type="text" name="name" id="name" required="">
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="group wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                                                <input type="text" name="email" id="email" required="">
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="group wow fadeInUp" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                <input type="text" name="subject" id="subject" required="">
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="group wow fadeInUp" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                                <textarea name="message" id="message" required=""></textarea>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                            <button type="submit" class="btn dream-btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ##### Contact Area End ##### -->
            
        
        @endslot
    </x-layout>
