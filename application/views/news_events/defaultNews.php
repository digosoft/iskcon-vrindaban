 <style type="text/css">

 
.subhead{
    text-transform: uppercase;
    border-bottom: 2px solid #2f2f2f;
    border-top: 2px solid #2f2f2f;
    padding: 12px 0 12px 0;

}
.weatherforcastbox{
    position: relative;
    width: 12%;
    left: 10px;
    border: 3px double #2f2f2f;
    padding: 10px 15px 10px 15px;
    line-height: 20px;
    display: inline-block;
    margin: 0 50px 20px -360px;
}
.content{
    font-size: 0;
    line-height: 0;
    word-spacing: -.31em;
    display: inline-block;
    margin: 30px 2% 0 2%;


}
.collumns{

}

.collumn{
    font-size: 14px;
    line-height: 20px;
    width: 17.5%;
    display: inline-block;
    padding: 0 1% 0 1%;
    vertical-align: top;
    margin-bottom: 50px;
    transition: all .7s;
}
.collumn + .collumn { 
  border-left: 1px solid #2f2f2f;
}
.collumn .headline{
    text-align: center;
    line-height: normal;
    font-family: 'Playfair Display', serif;
    display: block;
    margin: 0 auto;


}
.collumn .headline.hl1{
    font-weight: 700;
    font-size: 30px;
    text-transform: uppercase;
    padding: 10px 0 10px 0;

}

.collumn .headline.hl2{
    font-weight: 400;
    font-style: italic;
    font-size: 24px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}

.collumn .headline.hl2:before{
    border-top: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 7px;
    display: block;
    margin: 0 auto;
}
.collumn .headline.hl2:after{
    border-bottom: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 13px;
    display: block;
    margin: 0 auto;

}

.collumn .headline.hl3{
    font-weight: 400;
    font-style: italic;
    font-size: 36px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl4{
    font-weight: 700;
    font-size: 12px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl4:before{
    border-top: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 7px;
    display: block;
    margin: 0 auto;
}
.collumn .headline.hl4:after{
    border-bottom: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 10px;
    display: block;
    margin: 0 auto;

}

.collumn .headline.hl5{
    font-weight: 400;
    font-size: 42px;
    text-transform: uppercase;
    font-style: italic;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl6{
    font-weight: 400;
    font-size: 18px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl6:before{
    border-top: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 7px;
    display: block;
    margin: 0 auto;
}
.collumn .headline.hl6:after{
    border-bottom: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 10px;
    display: block;
    margin: 0 auto;

}
.collumn .headline.hl7{
    font-weight: 700;
    font-size: 12px;
    box-sizing: border-box;
    display: block;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl8{
    font-weight: 700;
    font-size: 12px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl9{
    font-weight: 700;
    font-size: 12px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .headline.hl10{
    font-weight: 700;
    font-size: 12px;
    box-sizing: border-box;
    padding: 10px 0 10px 0;
}
.collumn .citation{
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    line-height: 44px;
    /*font-style: italic;*/
    text-align: center;
    font-weight: 400;
    display: block;
    margin: 40px 0 40px 0;
    font-feature-settings: "liga", "dlig";

}
.collumn .citation:before{
    border-top: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 16px;
    display: block;
    margin: 0 auto;
}
.collumn .citation:after{
    border-bottom: 1px solid #2f2f2f;
    content: '';
    width: 100px;
    height: 16px;
    display: block;
    margin: 0 auto;
}
.collumn .figure {
      margin: 0 0 20px;
}
.collumn .figcaption{
    font-style: italic;
    font-size: 12px;
}
.media {
    -webkit-filter: sepia(80%) contrast(1) opacity(0.8);
    filter: sepia(80%) grayscale(1) contrast(1) opacity(0.8);
    mix-blend-mode: multiply;
    width: 100%;
}

/*MEDIAQUERIES*/
@media only all and (max-width: 1300px) {
    .weatherforcastbox{
        display: none;
    }

}
@media only all and (max-width: 1200px) {
    .collumn{
        width: 31%;
    }

}
    @media only all and (max-width: 900px) {
    .collumn{
        width: 47%;
    }

}
@media only all and (max-width: 600px) {
    .collumn{
        width: 100%;
    }
    .collumn + .collumn {
                border-left: none;
        border-bottom: 1px solid #2f2f2f;
    }
    

}
</style> 

    <div class="page-header-image relative">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-1.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-2.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-3.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-4.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-5.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-6.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-7.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-8.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-9.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-10.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-11.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?= base_url()?>assets/img/news/new-12.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>

                  
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div> 

        </div>
















</div>
<div class="head"> 
    <div class="subhead" align="center"><h1>ISKCON VRINDABAN, NEWS </h1></div>
</div>
<div class="content">
    <div class="collumns">
        <div class="collumn">
            <div class="head"><span class="headline hl3">ISKCON Temple - Vrindaban Organized 3000 Tree Plantation</span><p><span class="headline hl4">by Bajaj Electricals</span></p></div>

            ISKCON India partnered with the Bajaj Electricals for the first time, for a Barsana (Mathura). <br>
            “The Indian of the Bajaj Electricals realized the potential of engaging spiritual organizations, and reached out to us,” says ISKCON India Communications Director Saurabh Trivikrama Das. <br><br>
            <figure class="figure" align="center">
                <img class="media" src="<?= base_url()?>assets/img/news/tree-2.jpg" alt="">
                <figcaption class="figcaption">Barsana Tree Plantation By (ISKCON).</figcaption>
             </figure>

            Protecting the braj environment from the pollution caused by excessive use of plastic products such as polythene bags, cups etc. Hence protecting cows of braj, who are dying due to eating Plastic Products.
            </p></div>




        <div class="collumn">
            <div class="head"><span class="headline hl5">आईआईटीएन बना गीता साधक</span><p><span class="headline hl6">Saurabh Trivikrama Das</span></p></div>

            Saurabh Trivikrama Das(IITian) said, many Indians don't know what is there inside Bhagavad-Gita or Shrimad Bhagavatam. I also came to know about the deep knowledge given in these books by attending classes and programs conducted by ISKCON. For this Iam always grateful to Srila Prabhupada. Practically any question or concern one may have in life, the solution can be found in the ISKCON books.</p>
            <figure class="figure" align="center">
                                <img class="media" src="<?= base_url()?>assets/img/news/saurabh_prabhu.jpg" alt="">
                                <figcaption class="figcaption">Saurabh Trivikrama Das <br>B.Tech. (I.I.T. Delhi), M.B.A. (USA) <br>Director Communications</figcaption>
             </figure>

            <p></p>
 

            </div>
        <div class="collumn"><div class="head"><span class="headline hl1">BJP MP Hema Malini in ISKCON </span><p>
            <span class="headline hl2">Festival celebrations  By Hema Malini </span></p></div> Festivity is in the air, as the nation is busy celebrating Janmashtami (the birth of Lord Krishna). Hema Malini rang in the special day at the ISKCON (International Society for Krishna Consciousness) Temple in Vrindaban.</p>
                         <figure class="figure">
                                <img class="media" src="<?= base_url()?>assets/img/news/hemamalini.jpg" alt="">
                                <figcaption class="figcaption">"Hema Malini is a devotee of Lord Krishna."</figcaption>
                        </figure>
            <p>

            <p>A video of the actress-turned-politician singing Hare Rama Hare Krishna at the temple was shared on Instagram by a paparazzo and is going viral.
            The comments section was filled with compliments from fans, who were blown away by the gesture. "Radhe radhe," one Instagram user wrote, while another commented, "Beautiful night"</p></div>


        <div class="collumn"><div class="head">
            <span class="headline hl3">THE CAR FESTIVAL IN ISKCON </span>
            <p><span class="headline hl4"> Organize by Saurabh Trivikrama Das</span></p>
        </div>

        

            <figure class="figure">
                <img class="media" src="<?= base_url()?>assets/img/news/iskcon_rath.jpeg" alt="">
                <figcaption class="figcaption">"नगर संकीर्तन यात्रा में झूमते"</figcaption>
             </figure>

            <p>वृंदावन में इस्कॉन के संस्थापक स्वामी श्रील भक्ति वेदांत प्रभुपाद का तिरोभाव महोत्सव शनिवार से शुरू हो गया। महोत्सव के अंतर्गत देसी-विदेशी भक्तों ने सुबह संकीर्तन यात्रा निकाली। इसमें शामिल सैकड़ों भक्त भगवान की भक्ति में लीन नजर आए।  <br> <br>हरिनाम संकीर्तन के बीच प्रभुपाद की प्रतिमा को फूलों से सुसज्जित डोले में विराजित कराया गया। देसी-विदेशी भक्तों के 'हरे राम हरे कृष्ण...कृष्ण कृष्ण हरे हरे...' के संकीर्तन से वातावरण भक्तिमय हो गया। <br> <br>प्रभुपाद के अनुयायी डोले को लेकर संकीर्तन यात्रा के साथ वृंदावन की सड़कों पर भ्रमण को निकले। भक्तों ने राधादामोदर, श्याम सुंदर, राधारमण, राधा गोपीनाथ, गोविंदेव, मदन मोहन और गोकुलानंद के साथ साथ सेवाकुंज, बांकेबिहारी सहित अन्य मंदिरों के दर्शन किए।</p></div>


        <div class="collumn"><div class="head">
            <span class="headline hl1">Opcoming News </span><p>
                <span class="headline hl4">by ISKCON</span></p></div>

               <!--  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. </p> -->
                    
                    <p>  </p></div>
    </div>
</div>



















 
    <script type="text/javascript">
        $(document).ready(function() {
        $('#myCarousel').carousel({
        interval: 10000
        })
        
        $('#myCarousel').on('slid.bs.carousel', function() {
            //alert("slid");
        });    
    });
    </script>
 