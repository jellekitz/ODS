<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>
<?php @include('partials/user_panel.php'); ?>

    <!-- Header -->
            <header>
                <div class="container">
                    <div class="image">
                        <div class="overlay">
                            <h1>Kunst en Cultuur in de gemeente Edam-Volendam</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed turpis sem. Sed sodales venenatis. Nulla lobortis tristique hendrerit. Class  litora torquent per.</p>
                            <a href="#" class="btn">Meer informatie</a>
                        </div>
                    </div>
                </div>
            </header>
    <!-- End Header -->


    <!-- Plaatsen -->
    <section id="places">
        <div class="container">
            
            <div class="col-33 edam">
                <a href="#">
                    <div class="overlay">
                        <h3>Edam</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit.consectetur adipiscing amet elit.

                        </p>
                    </div>
                </a>
            </div>
            
            <div class="col-33 volendam">
                <a href="#">
                    <div class="overlay">
                        <h3>Volendam</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>                
            </div>
            <div class="col-33 warder">
                <a href="#">
                    <div class="overlay">
                        <h3>Warder</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 kwadijk">
                <a href="#">
                    <div class="overlay">
                        <h3>Kwadijk</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-33 oosthuizen">
                <a href="#">
                    <div class="overlay">
                        <h3>Oosthuizen</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>                
            </div>
            <div class="col-33 schardam">
                <a href="#">
                    <div class="overlay">
                        <h3>Schardam</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>   
            </div>
            <div class="col-33 beets">
                <a href="#">
                    <div class="overlay">
                        <h3>Beets</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a> 
            </div>
            <div class="col-33 middelie">
                <a href="#">
                    <div class="overlay">
                        <h3>Middelie</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a> 
            </div>
            <div class="col-33 hobrede">
                <a href="#">
                    <div class="overlay">
                        <h3>Hobrede</h3>
                        <p>Lorem ipsum dolor sit amet , 
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a> 
            </div>
        </div>
    </section>
    <!-- End Plaatsen -->


    <!-- Info -->
        <section id="info">
            <article>
                <div class="container">
                    
                    <div class="col-50">
                        <h2>Kunst</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>

                    <div class="col-50">
                        <h2>Cultuur</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>

                </div>
            </article>

            <aside></aside>
            
        </section>
    <!-- End Info -->

    <!-- Inschrijven -->


        <section id="inschrijven">
            <article>
                <div class="container">
                    
                    <div class="col-50">

                      <h2>Uw organisatie op de website?</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>
                    


                    <div class="col-50" method="post" action="">
                        <?php 
if(isset($_POST['submit'])){
    $to = 'jellekitz@gmail.com'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $nameO = $_POST['nameO'];
    $website = $_POST['website'];
    $select = $_POST['select'];
    $select2 = $_POST['select2'];
    $subject = 'Inschrijven';
    $message = $first_name . ' ' . $last_name . ' wilt zich inschrijven. ' .  "\r\n"  . 'telefoon nummer: ' . $telephone . "\r\n" . 'E-mail: ' . $email . "\r\n" . 'Website: ' . $website . "\r\n" . 'Type: ' . $select . "\r\n" . 'Stad: ' . $select2;
    

    $headers = 'From:' . $from;
    $headers2 = 'From:' . $to;
    mail($to,$subject,$message,$headers);
    echo 'Mail Sent. Thank you ' . $first_name . ', we will contact you shortly.';
   
    }
?>
                        <h2>Schrijf uw organisatie in!</h2>
                        <form action="" method="post">
                            <input class="first" type="text" placeholder="Voornaam" name="first_name">
                            <input type="text" placeholder="Achternaam" name="last_name">
                            <input class="first" type="text" placeholder="Telefoon" name="telephone">
                            <input type="text" placeholder="E-mail" name="email">
                            <input class="first" type="text" placeholder="Naam organisatie" name="nameO">
                            <input type="text" placeholder="Website" name="website">
                            <select id="select" name="select" class="first">
                                <option value="cultuur">Cultuur</option>
                                <option value="kunst">Kunst</option>
                            </select>
                            <select id="select2" name="select2">
                                <option value="edam">Edam</option>
                                <option value="volendam">Volendam</option>
                                <option value="warder">Warder</option>
                                <option value="kwadijk">Kwadijk</option>
                                <option value="oosthuizen">Oosthuizen</option>
                                <option value="schardam">Schardam</option>
                                <option value="beets">Beets</option>
                                <option value="middelie">Middelie</option>
                            </select>
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>

                </div>
            </article>

            
        </section>
    <!-- End Inschrijven -->


<?php @include('partials/footer.php'); ?>

