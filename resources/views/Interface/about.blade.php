@extends('interfaces.user_temp')
@section('styles')
<link href="{{asset('interface/css/aboutus.css')}}" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet"> -->
    <link href="{{asset('interface/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('interface/css/aboutus.css')}}" rel="stylesheet">

    <style>
     @media only screen and (max-width: 800px) {
     .long-traditional img {
        width: 100%;
            }
        }
        @media only screen and (max-width: 600px) {
             .long-traditional img {
                width: 100%;
            }
        }

        @media only screen and (max-width: 600px) {
             .long-traditional img {
                width: 100%;
            }
        }
      
    </style>
    
    

@endsection
@section('content')
    
     <!--Start Body-->
     <div class="cover">
        <div class="overlay"> <img src="aboutus/Pic_1.jpg" alt="" />
            <!-- <div class="overlay"></div> -->
            <div class="section-title  text-center">
                <h2>About US</h2>
            </div>
        </div>

    </div>
    <div class="container about">

        <!--About The Company-->
        <div>

            <div class="welcome ">
                <div class=" mt-3">
                    <h4>About The Company</h4>
                    <p>For over 30 years we have been shaping natural stone with unmitigated passion and deep admiration for the original splendor of this material. We convey its unique value in every project we carry out, so that each one bears the characteristics
                        and features of a style that is unmistakably elegance.
                        <br><br> AK stones has been one of the leading natural stone companies in Egypt since 1987, in addition supplying high-quality and unparalleled variety of granite, marble, travertine, limestone and onyx to clients all over the
                        country, with this advanced organizational structure and high level of technology. AK stone’s activity covers all aspects from quarrying, cutting, processing and finishing to packing and distribution.
                        <br><br> Our clients benefit from our record in applying marble and granite in global standards. AK stones was registered by Mr. Ali M. Kenawy with more than 30 years of experience in processing of natural stones in Egypt. The
                        activity has begun with small and residential projects, now the company has achieved more than 100 mega projects.
                        <br><br> The company's main strongest point is constant endeavor to promote new varieties of world-class Natural Stone products from time to time and also its ability in having fine-tuned concept of customer satisfaction to understand
                        its client's needs. We are competent to supply Natural stones in Slabs, Blocks and cut to size as per customer’s requirements. This strategy has helped the company in registering a steep growth in both volume and its varieties</p>
                </div>
            </div>
        </div>
        <!--A Long Tradition of Passion and Excellence-->
        <div>
            <div class="welcome text-center mt-5">
                <h4>A Long Tradition of Passion and Excellence</h4>
            </div>
            <div class="long-traditional text-center mt-3" data-aos="zoom-in">
                <img src="aboutus/Pic_2.webp" style="width:50%;  
                    "alt="" />
            </div>
            <p class="mt-3">A passion for natural stone, and a long-standing tradition of standards of excellence, are the main features of AK stones.</p>
            <div class="row ">
                <div class="col-md-3 mt-3">
                    <img src="aboutus/Pic_2..jpg" style="height: 150px;" alt="" />
                </div>
                <div class=" col-md-9 mt-3">
                    <!-- <h4 class="text-light ">A Natural Passion</h4> -->
                    <p>Years of experience in the world of architecture and International design has contributed prominently to the company’s growth, and every project undertaken highlights an innate taste for style and elegance, which today form an integral,
                        fundamental part of its identity.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 mt-3">
                    <img src="aboutus/Pic_2_sicon_nile_towers.jpg" style="height: 150px;" alt="" />
                </div>
                <div class=" col-md-9 mt-3">
                    <!-- <h4 class="text-light ">A Natural Passion</h4> -->
                    <p>The company has always worked in perfect synergy with well-known architects, designers, and construction companies realizing ambitious, important architectural projects, where the original beauty and uniqueness of natural stone combined
                        with skillful and experienced craftsmanship, give architectural design and interior ambiance a tone of exclusivity and timeless sophistication. The splendor of these materials, their colors and physical characteristics, allow designers
                        great creative freedom and give rise to innovative solutions that enhance design, both in the context of new contemporary styles and when dealing with classical architectural projects.
                    </p>
                </div>
            </div>
            <p>Many important, prestigious projects in architecture and design such as public, commercial, luxury buildings and hotels and splendid, private villas, all over the country, bear the hallmark of AK stones, the undisputed excellence of Egyptian
                expertise.
            </p>
        </div>

        <!--Reliability and Substance – An exclusive turnkey service-->
        <div>
            <h4 class="mt-3">Reliability and Substance – An exclusive turnkey service</h4>
            <div class="welcome row mt-4">
                <div class="col-md-4 mt-10">
                    <img src="aboutus/Picture_3.jpeg" alt="" />
                </div>
                <div class="col-md-8">
                    <p class="mt-3">The company has just the right structure designed to offer architectural firms, designers, and construction companies an exclusive turnkey service, complete from project consulting and technical solutions, through to supplying materials
                        and handling all requests, even the most challenging. Once an order has been placed, AK stones proceeds to source material, by searching, selecting and acquiring the most valuable stone directly from the original quarries, even
                        for large scale job orders, for which we guarantee consistency and uniformity.</p>

                </div>
            </div>
        </div>
        <!--Exploration-->
        <div class="mt-lg-5">
            <h4 class="mt-3">Exploration</h4>
            <div class="welcome row ">
                <div class="col-md-4 mt-1 ">
                    <img src="aboutus/Pic_4.webp " class="img-fluid " alt="" />
                </div>
                <div class="col-md-8 mt-1 ">
                    <p class="mt-3">Thanks to the deep knowledge of the materials and the possibility to create more and more new finishes by searching for new and unique colors. This allows natural stone to fit into new markets and sectors that used to employ it little
                        and limitedly, such as high-luxury shipbuilding industry and hospitality, by making elevators for 5-star hotels, swimming pools and Spas.</p>
                    <div class="row welcome ">
                        <div class="col-md-4 mt-3 ">
                            <img src="aboutus/Pic_4..jpg " alt="" style="height: 200px;" />
                        </div>
                        <div class="col-md-8 mt-3 ">
                            <!-- <h4 class="text-light ">A Natural Passion</h4> -->
                            <p>In 1993 we released our first major project, Pfizer US permanent administrative headquarter at al tahrir, after that Many new mega projects around the country followed, Hilton Taba Hotel in Taba, Edita headquarter 6th of October,
                                Carrefour Alexandria, National defense council Hotel 6th of October, Steinberger Hotel al tahrir, and many more, as well as various private residences all over the country, where unique marbles and precious stones from
                                all over the world were used and worked exclusively in Egypt.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!--Statr Mission & Vision-->

        <!-----------mission----------------->
        <div class="mission mt-lg-5 ">
            <div class="section-title ">
                <h2>Mission & Vision</h2>
            </div>
            <div class="mt-3 long-traditional text-center" >
                <img class="long-traditional" src="aboutus/Pic_5.jpg " alt="" />
               
            </div>

            <div class="row mt-lg-4">
                <!-- <div></div> <img class="icon col-md-4 mt-3 " src="aboutus/Pic_6.png " alt=" " /> -->
                <div class="col-md-3 mt-4 text-center" data-aos="fade-right" data-aos-delay="200">
                    <i class="fas fa-rocket fa-4x"></i>
                    <h3 class=" mt-3 "> Our Mission</h3>
                </div>
                <div class="col-md-9 mt-4">
                    <p data-aos="fade-right" data-aos-delay="400">AK stone’s mission goes beyond than the production and sale of the Natural Stone. As AK stones professional group, we aim to maximize and maintain satisfaction of our respectable customers. Moreover, we target to make the best use
                        of the natural resources and making a contribution to ensure that they get the position they deserve.
                        <br>We ensure the highest possible price-performance ratio in the quality of products supplied.
                        <br> We provide streamlined, holistic and responsible services and a can-do attitude within close-working partnerships to achieve our customers’ business goals.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300"class="mt-3"><span>Placing Our Customers First</span><br> We believe that satisfaction of our customers and partners is the highest value of our existence.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="400"class="mt-3"><span>Rapid Growth</span><br>We believe that rapid growth is the best guarantee for our sustainable development.

                    </p>
                    <p data-aos="fade-up" data-aos-delay="600"class="mt-3"><span>Honest Work</span><br>We believe that honest and passionate work is the fountain of endless possibilities.
                    </p>
                </div>
            </div>


            <!-----------Vision----------------->
            <div class="vision row text-center mt-4">
                <div class="col-md-3 mt-4" data-aos="fade-right" data-aos-delay="200">
                    <!-- <div></div> <img class="icon col-md-4 mt-3 " src="aboutus/Pic_6.png " alt=" " /> -->
                    <i class="fas fa-eye fa-4x "></i>
                    <h3 class=" mt-4 ">Our Vision</h3>
                </div>
                <div class="col-md-9 mt-3" data-aos="fade-reft" data-aos-delay="500">
                    <p>AK stone’s vision is to become the world benchmark for the Natural Stone sector. In order to realize this vision, AK stones aims to provide customers with high quality products that suit customers’ needs by employing the latest production
                        technologies. </p>
                    <p class="mt-3"><span>Our policy</span><br> Uncompromising quality commitment and customer value creation with utmost integrity and sincerity towards all relations
                    </p>
                </div>

            </div>
        </div>

        <!--End Mission & Vision-->

        <!--Start Values & Beliefs-->
        <div class="values-beliefs mt-5">
            <div class="section-title ">
                <h2>Values & Beliefs</h2>
            </div>

            <div class="row ">
                <div class="col-md-6 mt-3 " data-aos="fade-right" data-aos-delay="200">
                    <img src="aboutus/Pic_8.webp " alt="" />
                </div>
                <div class="col-md-6 mt-3">
                    <h3 class=" mt-3 " data-aos="fade-up" data-aos-delay="400"><i class="fas fa-chart-line fa-lg"></i> Constantly excelling</h3>
                    <h3 class=" mt-3 " data-aos="fade-up" data-aos-delay="600"><i class="fas fa-handshake fa-lg"></i> Excellence in service</h3>
                    <h3 class=" mt-3 " data-aos="fade-up" data-aos-delay="800"><i class="fas fa-user-friends fa-lg"></i> Team spirit</h3>
                    <h3 class=" mt-3 " data-aos="fade-up" data-aos-delay="1000"><i class="fas fa-hand-holding-water fa-lg"></i> Respect and care for the environment</h3>
                    <h3 class=" mt-3 " data-aos="fade-up" data-aos-delay="1200"><i class="fas fa-praying-hands fa-lg"></i> Provide a hustle free service</h3>
                </div>
            </div>

        </div>
        <!--End Values & Beliefs-->

        <!--Start Why Choose Us-->
        <div class="why-choose-us mt-lg-5">
            <div class="section-title ">
                <h2>Why Choose Us</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 ">
                    <img src="aboutus/Pic_9.webp " class=" img-fluid " alt="" />
                </div>
                <div class="col-md-8 mt-3 ">
                    <h3 class="mt-3 ">Why Choose AK Stones</h3>
                    <p>Choosing natural stone means searching for Perfection. Each block and slab presents itself through its uniqueness, shaping places whom the refined mood of those who live there identify with.</p><br>
                    <p>AK stones proposes itself as an open book offering customized scenarios and an incredible variety of materials and colors to be applied and integrated in order to mold distinguished, emotional and special environments. Through years
                        the company has been specializing to embrace ad accompany customers in granting their wish, offering a complete service, so when you choose AK you get the whole package:
                    </p>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="200">
                    <!-- <img src="aboutus/Pic 10.png " alt=" " /> -->
                    <i class="fas fa-users-cog fa-4x "></i>
                    <h6>On site management</h6>
                    <p> Our on-site management services are provided to insure quality control, installation, timelines and cost effectiveness are maintained.
                    </p>
                </div>
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="400">
                    <!-- <img src="aboutus/Pic 11.png " alt=" " /> -->
                    <i class="fas fa-tasks fa-4x "></i>
                    <h6>One stop solutions</h6>
                    <p> AK stones provides a complete stone decoration solution, from designing, fabricating, shipping to installation, and from factory directly to your site.
                    </p>
                </div>
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="600">
                    <!-- <img src="aboutus/Pic 12.jpg " alt=" " /> -->
                    <i class="fas fa-people-carry fa-4x "></i>
                    <h6>Installation Specialists</h6>
                    <p>Our employees have over 30-year experiences in stone installation. They are the key to our success.

                    </p>
                </div>
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="800">
                    <!-- <img src="aboutus/Pic 13.jpg " alt=" " /> -->
                    <i class="fas fa-headset fa-4x "></i>
                    <h6>Technical Advice</h6>
                    <p>Our technical support is able to answer any questions that you may have. We provide a 24Hr, 7 days a week assistance.
                    </p>
                </div>

            </div>
            <div class="row ">
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="200">
                    <!-- <img src="aboutus/Pic 14.png " alt=" " /> -->
                    <i class="fas fa-shipping-fast fa-4x "></i>
                    <h6>Logistics Coordination</h6>
                    <p>Our logistics coordination team will assist you in making all orders for exactly what, where and how you require.
                    </p>
                </div>
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="400">
                    <!-- <img src="aboutus/Pic 15.png " alt=" " /> -->
                    <i class="fas fa-hand-holding-heart fa-4x "></i>
                    <h6>Care</h6>
                    <p>Care of high-end projects, with integrated services such as the laying measurement and development of drawings with the consequent production records.

                    </p>
                </div>
                <div class="col-md-3 mt-4 text-center " data-aos="fade-up" data-aos-delay="600">
                    <!-- <img src="aboutus/Pic 16.png " alt=" " /> -->
                    <i class="fas fa-paint-brush fa-4x "></i>
                    <h6>Design</h6>
                    <p>Our technical department has all the skills required for the elaboration of executive drawings of a project for cladding, flooring, tables, kitchens, bathrooms and more.

                    </p>
                </div>

            </div>

        </div>
        <!--End Why Choose Us-->

        <!--Start CEO Message-->
        <div class="ceo-message mt-lg-5">
            <div class="section-title ">
                <h2>CEO Message</h2>
            </div>
            <h4>CEO MESSAGE:</h4>
            <p>It is a great pleasure to start with extending my deepest gratitude to our partners in success: those who deal with AK stones, customers, suppliers, workers and officials. Before getting into details relating to the Company, I find it appropriate
                to give a quick review of finding the company, its points of strength and challenges encountered through its history, so as to familiarize all those relate to it: industrialists, business people, engineers, partners, and agents etc. ...
                with its new activities. Nowadays, it can be said that a company neglects earnest and continued self-development, in this fast changing world, and lasts constantly stable is a company doomed to weakness or perhaps vanishing. The wise man
                who described science that stops for a reason or another was right when he said: "stable science is like stable ignorance ". This fact goes beyond the boundaries of science. It is true for all human activities in literature, arts, society,
                economics and hence in industry. AK stones began its industrial activity in 1987, were the strategy was to the business need target the private sectors particularly villas, in 1993 we establish our way for manufacturing and implementing
                of natural stone works in Egypt to meet the needs of the continuous and growing market and to continue in our strategic plan, we established in Details decoration for implementing the works in a professional high standard engineering way.
                To conclude, I would like to thank all of the company’s customers, suppliers and workers, to whom the gratitude is owed for AK Stones achieving the remarkable reputation and trust of those dealing with it. May Allah bless us and direct
                us to what is good for the country and nation.</p>
        </div>
        <!--End CEO Message-->

    </div>
    <!--End Body-->


@endsection