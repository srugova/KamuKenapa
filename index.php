<?php
if(isset($_POST['submit'])) 
{

$message=
'Name: '.$_POST['name'].'<br/>
Email:    '.$_POST['email'].'<br/>
LINE ID:  '.$_POST['lineid'].'<br/>
Phone:  '.$_POST['phone'].'<br/>
Message:  '.$_POST['message'].'<br/>';
    require "phpmailer/class.phpmailer.php"; 
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "ditasrugova@gmail.com"; // Your full Gmail address
    $mail->Password   = "xxDitaxx1509"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = "Here To Help";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("heretohelp.id@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();        // mengirim email  
    $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Here to Help</title>

    

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">



    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Here to Help</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Abnormal Psychology</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#team">Our Team</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#testimonial">Testimonial</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Tell Your Story</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Here To Help</span>
                        <hr class="star-light">
                        <span class="skills">We are here to listen, advise, help, and accompany you through.</span>
                         <div class="home-guide-container container clearfix">
                    <img class="img-responsive" src="img/home-guide.png" alt="Guide" />
                     </div>
                    </div>

                </div>

            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Abnormal Psychology</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ea-01.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/suicidal-01.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/md.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/pd-01.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ad-01.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bd-01.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Here To Help adalah sebuah website pengetahuan bermacam-macam jenis psikologi abnormal (mental illness) yang juga berfungsi sebagai hotline yang bertujuan memprevensi tindakan bunuh diri maupun tindakan menyakiti diri sendiri (self-harm) yang banyak terjadi di kalangan remaja hingga dewasa (15-25 tahun).</p>
                </div>
                <div class="col-lg-4">
                    <p>Kami akan mendengarkan masalahmu dan membantu menganalisa apa yang sedang kamu alami. Selain melewati website kami,kamu juga bisa berbicara kepada team kami langsung, 24 jam, melaluli akun <a href="http://line.me/ti/p/%40yde8148p">LINE@</a> kami!</p>
                </div>
                            </div>
        </div>
    </section>

     <!-- Team Section -->
    <section id="team" class="container">
        <div class="bg-light-gray">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Will Help You Through</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Dr. Rena Amelia Sjam SP-Kj<br/>(CONFIRMED)</h4>
                        <p class="text-muted">Dokter Spesialis Kedokteran Jiwa atau Psikiater</p>
                        <ul class="list-inline social-buttons">
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Nurhadiyati Diajeng P. A. S.</h4>
                        <p class="text-muted">Founder</p>
                        <ul class="list-inline social-buttons">
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Dra. Antonia Ratih Andjayani <br/>(NOT YET CONFIRMED)</h4>
                        <p class="text-muted">Ahli Psikologi Klinis</p>
                        <ul class="list-inline social-buttons">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">We will listen to your story very carefully patient, look for the best help or medication, we will stand by you and we will help you through</p>
                </div>
            </div>
        </div>
        <section id="testimonial">
        <div class="container w960">
        <div class="heading">
            <h2>Testimonials</h2>
            <hr class="star-light">
            <h3>From them who have successfully survived and recovered.<br>
             </h3>
        </div>
        <div class="row">
        <blockquote>Saya mengidap penyakit Borderline Personality Disorder, awalnya saya tidak mengetahui hal tersebut. Namun, setelah berkonsultasi di Here To Help Indonesia dan mendapatkan arahan dan bimbingan dari ahlinya, akhir nya saya tau apa yang harus saya lakukan dan langkah yang harus saya ambil. <cite>Mawar, Pelajar<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
        <blockquote>Hampir saja saya bunuh diri pada waktu itu, kemudian seorang teman memberitahukan sebuah website konsultasi yang fokus kepada prevensi bunuh diri dan tentang kesehatan mental. Saya kemudian menceritakan masaah saya, dan dipertemukan dengan seorang psikiater yang membantu saya untuk recovery lewat terapi obat-obatan sesuai dengan dosisnya. Alhamdulillah sekarang pikiran bunuh diri sudah hampir tidak pernah menghampiri saya sesering dahulu. <cite>Indah, Pegawai Swasta<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
        </div>
    </div>
    </section>
        </section>
        <!-- Testimonial Section -->


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tell Us About Your Story</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form method="post" action="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name / Alias (Nama samaran)</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Please enter your valid email address.</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Adress">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your LINE ID if there is any</label>
                                <input type="text" name="lineid" class="form-control" placeholder="LINE ID" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Enter your active phone number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>We will not publish your story without your concern; your secret is safe with us</label>
                                <textarea rows="5" type="text" name="message" class="form-control" placeholder="Story"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send" />
                            </div>
                        </div>
                    </form>
                    <p><?php if(!empty($message)) echo $message; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Headquarters</h3>
                        <p>Kertaspaper HQ<br>Jl.Melati 1 Blok B14 No.4, Sawangan, Depok, Jawa Barat</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Media Kami</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="http://www.facebook.com/HereToHelpID" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="http://www.instagram.com/Kertaspaper.co" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Tentang Pendiri</h3>
                        <p>Pendiri berusaha memecahkan masalah yang ada di dunia nyata lewat penerapan Teknologi Informasi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Here To Help; Nurhadiyati 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Eating Disorder</h2><br>(Sindrom Kelainan Pola Makan)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/ea-01.png" class="img-responsive img-centered" alt="">
                            <p>Eating disorder jelas merupakan penyakit yang melibatkan fisik, emosional maupun psikis dari si penderita. Meski umumnya penderita eating disorder lebih banyak wanita, tetapi banyak pula pria yang juga mengalami penyakit ini. Biasanya, mereka yang terobsesi dengan tubuh kurus atau salah diet cenderung rentan mengidap eating disorder. Berikut adalah macam-macam eating disorder dan ciri-cirinya : <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/anorexia-nervosa/"> Anoreksia Nervosa, </a><a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/bulimia-nervosa/">Bulimia Nervosa, <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/binge-compulsive-over-eating/">Binge Eating Disorder</a>.</p>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Suicidal Behavior</h2><br>(Perilaku Bunuh Diri)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/suicidal-01.png" class="img-responsive img-centered" alt="">
                            <p><br>Orang yang bertindak ingin mati atau tidak mematikan, tetapi menunjukkan tanda-tanda merusak diri atau menunjukkan pemikiran bunuh diri. Tandanya berupa overdosis obat-obatan, menyetir mobil secara sembrono, dan mengasup minuman keras berlebihan.</br></p>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Mood Disorders</h2><br>(Gangguan Perasaan)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/md.png" class="img-responsive img-centered" alt="">
                            <p><br>Mood adalah kondisi perasaan yang terus ada yang mewarnai kehidupan psikologis kita. Perasaan sedih atau depresi bukanlah hal yang abnormal dalam konteks peristiwa penuh tekanan. Namun orang dengan gangguan mood (mood disorder) mengalami gangguan mood yang luar biasa parah atau berlangsung lama dan mengganggu kemampuan mereka untuk berfungsi dalam memenuhi tanggung jawab secara normal.</br>

            <br>Sejumlah orang mengalami depresi berat bahkan ketika semua hal tampak berjalan lancar, atau saat mereka menghadapi peristiwa yang sedikit membuat kesal yang dapat diterima dengan mudah oleh orang lain. Sebagian lainnya mengalami perubahan mood  yang ekstrem. Mereka bagaikan menaiki roller coster  emosional dengan ketinggian yang membuat pusing dan turunan yang bukan kepalang ketika dunia di sekitar mereka tetap stabil.</br>

            <br>Macam-macam mood disorders atau gangguan perasaan adalah <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/depresi/">Depresi</a>,<a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/bipolar-disorder/"> Bipolar Disorder</a>,<a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/seasonal-affective-disorder-sad/"> Seasonal Affective Disorder (SAD)</a>,<a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/self-injury-self-harm/"> Self-injury / Self-harm.</a> </br>
</p>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Personality Disorder</h2><br>(Gangguan Kepribadian)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/pd-01.png" class="img-responsive img-centered" alt="">
                            <p><br>Dulu istilah gangguan kepribadian (personality disorder) sering disebut sebagai psychopathy, artinya adalah adanya kekuranga atau gangguan dalam jiwa yang tampil dalam perilakunya sehari-hari. Kadang-kadang juga disebut dengan sociopathy, karena yang diperhitungkan adalah perilaku yang menimbulkan atau memberi dampak negatif terhadap masyarakat. Istilah psychopathy digunakan oleh masyarakat di Eropa sedangkan istilah sociopathy digunakan oleh masyarakat di Amerika.</br>
<br>Personality disorder adalah gangguan-gangguan dalam perilaku yang memberikan dampak atau dinilai negatif oleh masyarakat. Pemahaman ini bersumber pada masalah perkembangan, yaitu bahwa manusia berkembang dari lahir dalam suatu proses dimana terjadi interaksi antara dirinya dengan lingkungannya. Proses inilah yang menyebabkan kondisi di dalam diri seseorang (inner world) menimbulkan adanya perkembangan kepribadian, termasuk didalamnya tugas-tugas perkembangan dan moralitas dalam berperilaku. Dalam personality disorder, kejadian yang tampil adalah bahwa pada suatu taraf usia tertentu individu berperilaku menurut pola perilaku anak-anak yang lebih muda atau jauh lebih muda dari usianya. Dengan kata lain pada orang tersebut, ia masih berorientasi pada diri sendiri atau kepentingannya sendiri.</br>
<br>Menurut DSM-III personality disorder adalah sifat-sifat kepribadian yang merupakan pola-pola yang berkelanjutan dalam hal perceiving (mempersepsi atau menanggapi), berelasi, atau berpikir mengenai lingkungan dan dirinya sendiri sehingga ditampilkan dalam rentang yang luas mengenai konteks-konteks pribadi dan sosial yang penting. Jika ciri-ciri kepribadian tidak fleksibel dan maladaptif, serta menyebabkan secara fungsional memperlihatkan kelemahan yang signifikan atau mengalami distress subyektif, maka terjadilah personality disorder. Bentuk-bentuk gangguan kepribadian biasanya ditemukan pada remaja atau sebelumnya dan terus berkembang sampai usia dewasa.</br>
<br>Personality disorder (gangguan kepribadian) merupakan pola yang menetap (long-standing pattern) yang menyagkut perilaku, pikiran, dan perasaan yang sangat maladaptif (highly maladaptive) bagi individu maupun orang-orang disekitarnya. Sedangkan menurut PPDGJ-III gangguan kepribadian khas adalah suatu gangguan berat dalam konstitusi karakteriologis dan kecenderungan perilaku dari seseorang, biasanya meliputi beberapa bidang dari kepribadian, dan hampir selalu berhubungan dengan kesulitan pribadi dan sosial.
</br>
<br>Beberapa jenis personality disorder atau gangguan kepribadian adalah <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/antisocial-personality-disorder/">Antisocial Personality Disorder</a>,<a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/gangguan-kepribadian-ambang-borderline-personality-disorder/"> Gangguan Kepribadian Ambang (Borderline Personality Disorder</a></p>
                                                       <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Anxiety Disorders</h2><br>(Gangguan Kecemasan)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/ad-01.png" class="img-responsive img-centered" alt="">
                            <p><br>Anxiety disorders adalah sebuah penyakit mental yang serius. Orang dengan gangguan ini biasanya memiliki rasa cemas yang besar dan berlebihan, dan sering kali rasa cemas ini melumpuhkannya.</br>

<br>Beberapa jenis anxiety disorders yang bisa kita jumpai adalah: <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/panic-disorder/">Panic Disorder / Attack, <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/obsessive-compulsive-disorders-ocd/">Obsessive-Compulsive Disorders (OCD), <a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/post-traumatic-stress-disorder-ptsd/">Post-traumatic stress disorder (PTSD), <a href"https://nurhadiyatidpas.wordpress.com/2016/03/13/social-anxiety-disorders/">Social Anxiety Disorders, </a><a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/spesific-phobias/">Spesific Phobias, </a><a href="https://nurhadiyatidpas.wordpress.com/2016/03/13/generalized-anxiety-disorder/">Generalized Anxiety Disodrders.</a></br>
<br>Gejala umum anxiety disorders:</br>

<br>Kepanikan/kecemasan yang berlebihan</br>
<br>Tidak terkendali, cenderung obsesif terhadap sesuatu</br>
<br>Sering mengalami kilas balik dari pengalaman trauma</br>
<br>Sering dihantui mimpi buruk</br>
<br>Memiliki perilaku ritual yang aneh, misalnya sering mencuci tangan berkali-kali</br>
<br>Sering berkeringat dingin</br>
<br>Sesak napas</br>
<br>Palpitasi (detak jantung tidak teratur)</br>
<br>Tidak bisa tenang atau diam</br>
<br>Sering mengalami ketegangan otot</br>
<br>Mual, pusing, dan sering kesemutan</br>
<br>Apa penyebabnya??</br>

<br>Gangguan kecemasan ini merupakan salah satu bentuk dari penyakit mental. Penyebabnya bisa apa saja, seperti ketidakseimbangan kimia dalam tubuh, perubahan struktur otak, stres lingkungan, trauma dan phobia, dsb.</br>

<br>Diagnosa penyakit mental ini hanya bisa dilakukan oleh dokter ahli. Tidak setiap orang bisa langsung menilai bahwa orang dengan gejala-gejala yang telah disbeutkan tadi berarti mengalami anxiety disorders ini. Dokter membutuhkan riset dan observasi terhadap perilaku pasien.</br>

<br>Bagaimana cara mengatasinya?</br>

<br>Gangguan kecemasan ini bisa diatasi dengan pengobatan, seperti pemberian anti depresan. Atau juga dengan psikoterapi, terapi perilaku, terapi relaksasi, atau bahkan diet. Biasanya para ahli membantu pasiennya untuk berbicara dan menemukan cara-cara untuk menangani gangguan ini.</br>

</p>
                                                       <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Behavorial Disorders</h2><br>(Gangguan Perilaku)</br>
                            <hr class="star-primary">
                            <img src="img/portfolio/bd-01.png" class="img-responsive img-centered" alt="">
                            <p><br>Gangguan perilaku (behavioral disorder) adalah mereka yang terkait  masalah kesehatan mental yang mengarah pada perilaku yang mengganggu, masalah emosional dan sosial. Attention Deficit Disorder (ADD) adalah contoh dari gangguan perilaku. Anak-anak dengan gangguan perilaku biasanya membutuhkan berbagai intervensi profesional termasuk obat-obatan, perawatan psikologis, rehabilitasi, atau perawatan lainnya.</br>


<br>Masalah perilaku sangat sulit  di-identifikasi, karena mereka terdiri dari perilaku yang tidak sesuai dan diterima secara sosial untuk kelompok usia tertentu. Tanda-tanda gangguan ini mungkin tidak jelas dalam segala situasi, itulah sebabnya mengapa guru memainkan peran penting dalam diagnosis. Karakteristik dari gangguan perilaku (behavioral disorder) ini misalnya, memiliki masalah pembelajaran sekolah, perilaku yang tidak pantas, ketidakbahagiaan mendalam atau depresi, gejala fisik atau ketakutan yang berhubungan dengan sekolah atau masalah pribadi. Metode skrinning untuk menentukan gangguan perilaku meliputi tes kecerdasan dan prestasi, penilaian intrapersonal, wawancara individu, evaluasi diri, pengamatan perilaku secara langsung, dan peringkat perilaku (dibandingkan dengan orang lain dari usia yang sama).</br>

<br>Penyebab dari gangguan perilaku (behavioral disorder), meliputi :</br>

<br>– Faktor Biological : semua perilaku yang melibatkan aktivitas
biokimia, kecelakaan genetik, kerusakan otak, malnutrisi, penyakit
fisik, cacat fisik, temperamen (karekteristik perilaku bawaan)</br>

<br>– Faktor Keluarga : konflik, paksaan (penyalahgunaan, omelan,
ancaman), perceraian, gaya asuh keluarga, perilaku orang tua.</br>

<br>– Faktor Sekolah : pemberian model perilaku, konsistensi dalam
mengelola perilaku, kesadaran akan individu yang berbeda dengan
yang lain, koneksi intruksional, penolakan oleh teman-teman.</br>

<br>Berikut ini adalah beberapa macam jenis perilaku yang termasuk dalam gangguan perilaku :</br>

<br><strong>Conduct Disorder</strong>
Gangguan perilaku dan emosional yang terdapat pada sekitar 9% dari anak laki-laki dan 2% dari anak perempuan di bawah usia 18 tahun. Gangguan ini ditandai dengan perilaku antisosial yang merusak aktivitas sehari-hari seperti agresi terang-terangan, pencurian, pembakaran, berbohong. Anak-anak ini dapat di-identifikasi dengan tingginya perilaku agresif. Pada anak laki-laki memenuhi resiko tiga kali lebih besar dibandingkan  anak perempuan.</br>

<br><strong>Delinquency and Substance Abuse (Kejahatan dan Penyalahgunaan Zat)</strong>
Pada kelas sosial yang lebih rendah dan minoritas dilaporkan menunjukkan perilaku yang lebih parah. Perlu diwaspadai tanda-tanda penggunaan narkoba seperti perubahan prestasi di sekolah, perubahan dalam penampilan, perubahan mood, penarikan diri dari keluarga, bergaul dengan kelompok pemakai, pola perilaku yang tidak biasa, sikap defensive terhadap obat.</br>

<br><strong>Anxiety-Withdrawal Disorder (Kecemasan – Gangguan Penarikan Diri)</strong>
Perilaku ini sering diabaikan karena tidak mengganggu. Dapat merugikan dalam proses belajar juga karena anak-anak secara sosial tidak mengembangkan keterampilan sosial yang dibutuhkan untuk mengembangkan hubungan yang bermakna. Harga diri sering rendah.
Tanda-tanda penarikan diri seperti perasaan rendah diri atau kesadaran diri, merasa malu, rasa takut. Tanda-tanda gangguan kecemasan meliputi obsesi (pikiran berulang), dorongan (tindakan yang berulang).</br>

<br>Perilaku obsesif/kompulsif sering disebabkan oleh ketakutan. Beberapa strategi untuk mengurangi ketakutan adalah dengan pemodelan, desensitiasi, dan pelatihan pengendalian diri.</br>

<br><strong>Psikosis</strong>
Jenis perilaku menyimpang serius dan diidentifikasi dengan pengamatan langsung. Gejalanya berupa mengeluarkan air liur, menatap ke angkasa, pola perilaku yang tidak biasa, pikiran gila, ucapan, dan tindakan.</br>

<br>Perilaku lainnya yang memenuhi gejala-gejala Gangguan Perilaku (Behavioral Disorder)</br></p>
                                                       
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

   


</body>

</html>
