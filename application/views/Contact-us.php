
  
        <div id="content">

            <div class="page-header-map relative">
               <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=iskcon%20vrindavan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org">embed google map in divi footer</a></div><style>.mapouter{position:relative;text-align:right;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;}</style></div>
            </div> 


            <article>
                <div class="content-1070 center-relative entry-content">
                    <div class="content-900 center-relative">
                        <h1 class="entry-title">Location</h1>
                        <div class="one_half ">
                           
                            <br>
                            <p> ISKCON Vrindavan,<br> Krishna Balaram Temple<br> Bhaktivedanta Swami Marg Raman Reti,<br>
                             Vrindavan. Uttar Pradesh-281121<br> India</p>
                            <br>
                            <div class="montserrat">
                                
                                <span style="color: #adadad;">Phone:</span> +91-7895-93-0101 / +91-7017036531<br>
                                <span style="color: #adadad;">Email:</span> saurabh@iskconvrindaban.com
                            </div>
                        </div>
                        <div class="one_half last ">

                            <?php if($this->session->flashdata('message')){ ?>
                                <div style="color: green"> <?= $this->session->flashdata('message') ?></div>

                            <?php } ?>
                            <div class="contact-form" >
                            <form action="<?= base_url() ?>contact-form-process" method="post">

                                <p><input id="name" type="text" name="your_name" placeholder="Name" required></p>
                                <p><input id="contact-email" type="email" name="your_email" placeholder="Email" required></p>
                                <p><input id="subject" type="text" name="your_subject" placeholder="Subject" required></p>
                                <p><textarea id="message" name="your_message" placeholder="Message" required></textarea></p>
                                <p><input type="submit"  value="SEND"></p>
                            </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </article>


        </div>



 