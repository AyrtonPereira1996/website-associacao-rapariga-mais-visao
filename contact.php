<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raparigas +Visão :: Contato</title>

    <script src="/_js/script.js"></script>
    <link rel="stylesheet" href="/_css/style.css">
    <link rel="stylesheet" href="/_css/reset.css">
    <link rel="stylesheet" href="/_css/bootstrap.css">

</head>

<body>
    <header class="mb-5">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light h-auto">
            <a href="index.php" class="navbar-brand">Associação
                Raparigas +Visão</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-elements">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar-elements" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3"><a href="index.php" class="nav-link
                                font-weight-bolder"><i class="fas fa-home"></i> Inicio</a></li>
                    <li class="nav-item mr-3"><a href="#" class="nav-link font-weight-bolder">Quem somos <i
                                class="fas fa-question"></i></a></li>
                                <li class="nav-item mr-3"><a href="activities.php" class="nav-link font-weight-bolder"><i
                                class="fas fa-tasks"></i> Actividades</a></li>
                                <li class="nav-item mr-3"><a href="gallery.php" class="nav-link
                        font-weight-bolder"><i class="far fa-images"></i> Galeria</a></li>
                    <li class="nav-item mr-3 active"><a href="contact.php" class="nav-link
                                font-weight-bolder"><i class="fas fa-at"></i> Contato</a></li>
                    <li class="nav-item mr-3"><a href="donation.php" class="nav-link
                                font-weight-bolder"><i class="fas fa-hand-holding-heart"></i> Doação</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <button id="btnScrollToTop">
        <i class="fas fa-arrow-up fa-2x"></i>
    </button>

    <div class="content">
        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
                <h1 class="h1" style="color: #fff;">&nbsp;&nbsp; Por favor aguarde! </h1>
            </div>
        </div>


        <div class="container-fluid mt-n5 p-5 title-page-area">

            <h1 class="text-center text-light font-weight-bold">Contato</h1>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col">

                    <section class="mb-5">
                        <p class="p-4 font-weight-bold shadow-sm"
                            style="border: 5px dotted rgba(179, 62, 138); border-radius: 10px;">A AR+V
                            é
                            uma Associação de âmbito provincial com sede na Cidade de Quelimane que pode estabelecer
                            delegações nos distritos da província da Zambézia (Moçambique) com fim de alargar as suas
                            actividades de desenvolvimento.

                        </p>
                    </section>

                </div>

            </div>
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="bsalert-success">
                <p><i class="fas fa-check fa-3x"></i> A mensagem foi enviada com sucesso. Agradecemos por entrar em
                    contacto connosco!</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="bsalert-fail">
                <p><i class="fas fa-times fa-3x"></i> Opps! Não foi possível enviar a sua mensagem. Por favor verifique
                    a sua conexão de internet e tente de novo...</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div id="contact-us"></div>
                    <section id="contact">
                        <h2 class="font-weight-bold">Fale connosco
                        </h2><br />

                        <div class="form-group">
                            <input type="text" name="name" id="txtname" class="form-control field placeholder"
                                placeholder="Nome Completo" autofocus tabindex="1">
                            <div class="mt-2 ml-2"><small class="text-muted">(Dica: xxxxxx xxxxxx)</small></div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" id="txtemail" class="form-control field placeholder"
                                placeholder="E-mail/correio electrónico" tabindex="2">
                            <div class="mt-2 ml-2"><small class="text-muted">(Dica: xxxx@xxxxx.xxx)</small></div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" id="txtsubject" class="form-control field placeholder"
                                placeholder="Assunto" tabindex="3">
                            <div class="mt-2 ml-2"><small class="text-muted">(Dica: Sugestão)</small></div>
                        </div>

                        <div class="form-group">
                            <textarea style="resize: none;" name="message" id="txtmessage" cols="30" rows="10"
                                class="form-control field-area placeholder" placeholder="Interage connosco"
                                tabindex="4"></textarea>
                            <div class="mt-2 ml-2"><small class="text-muted">(Dica: Não hesite em escrever)</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info btn-lg" onclick="sendEmail()"><i
                                    class="far fa-envelope"></i>
                                Enviar</button>
                        </div>

                    </section>

                </div>
               


                <div class="col-sm-12 col-md-6">
                    <section id="contact">
                        <h2 class="font-weight-bold">Contatos/Localização</h2><br />

                        <p>
                            <span class="font-weight-bold">E-mail: </span>
                            <a href="mailto:fafaabelmatosm@gmail.com" class="global-link ">fafaabelmatosm@gmail.com</a><br />
                            <span class="font-weight-bold">Tel.:</span> <a class="global-link " href="tel:+258840183687">+258
                                840183687</a><br />

                            <span class="font-weight-bold">Localização: </span><a target="_blank"
                                href="https://pt.wikipedia.org/wiki/Quelimane" class="global-link ">Quelimane </a> - <a target="_blank"
                                href="https://pt.wikipedia.org/wiki/Mo%C3%A7ambique" class="global-link ">Moçambique</a>
                            <br />



                        </p>
                    </section>
                </div>

            </div>

        </div>




    </div>

    <footer>
        <div class="container-fluid">
            <div style="font-size: 1.2em;" class="text-center">
                <p>
                    <a href="about-us.php">Sobre nós</a> <span class="special-character">|</span> <a class="  "
                        href="about-us.php#about-mission">Missão da associação</a> <span
                        class="special-character">|</span> <a href="about-us.php#about-vision">Visão da
                        associação</a> <span class="special-character">|</span>
                    <a href="about-us.php#about-values">Valores da associação</a> <span
                        class="special-character">|</span> <a class="  " href="about-us.php#about-objectives">Objetivos
                        da associação</a> <span class="special-character">|</span> <a class="  " href="donation.php">Doe
                        para associação</a>
                </p>
            </div>

            <div class="text-center">
                <p>Copyright 2020 &copy; - Associação Raparigas + Visão <a target="_blank"
                        href="https://pt.wikipedia.org/wiki/Mo%C3%A7ambique">(Moçambique)</a><br /> Made with <i
                        class="fas fa-heart"></i> by Ayrton Pereira - <a
                        href="mailto:ayrton_pereira1996@hotmail.com">ayrton_pereira1996@hotmail.com</a></p>
            </div>


        </div>
    </footer>

    <script>
    const btnScrollToTop = window.document.querySelector("#btnScrollToTop");

    window.addEventListener("scroll", scrollFunction);

    btnScrollToTop.addEventListener("click", function() {
        window.scrollTo({
            left: 0,
            top: 0,
            behavior: "smooth"
        })
    })

    function sendEmail() {
        var name = $('#txtname');
        var email = $('#txtemail');
        var subject = $('#txtsubject');
        var message = $('#txtmessage');

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(message)) {
            $.ajax({
                url: 'send-email.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    message: message.val()
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#bsalert-success').fadeIn();
                        window.document.querySelector("#txtname").value = "";
                        window.document.querySelector("#txtemail").value = "";
                        window.document.querySelector("#txtsubject").value = "";
                        window.document.querySelector("#txtmessage").value = "";
                        window.document.querySelector("#txtname").classList.add('border');
                        window.document.querySelector("#txtemail").classList.add('border');
                        window.document.querySelector("#txtsubject").classList.add('border');
                        window.document.querySelector("#txtmessage").classList.add('border');
                        console.log(response);

                    } else {
                        $('#bsalert-fail').fadeIn();
                        window.document.querySelector("#txtname").value = "";
                        window.document.querySelector("#txtemail").value = "";
                        window.document.querySelector("#txtsubject").value = "";
                        window.document.querySelector("#txtmessage").value = "";
                        window.document.querySelector("#txtname").classList.add('border');
                        window.document.querySelector("#txtemail").classList.add('border');
                        window.document.querySelector("#txtsubject").classList.add('border');
                        window.document.querySelector("#txtmessage").classList.add('border');
                        console.log(response);
                    }
                },
                beforeSend: function() {
                    $('#overlay').fadeIn('fast');
                },
                complete: function() {
                    $('#overlay').fadeOut('fast');
                }


            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', 'solid 1px red')
            return false;
        } else {
            caller.css('border', 'solid 1px green')
            return true;
        }
    }
    </script>



    <script src="/_fontAwesome/js/all.js"></script>
    <script src="/_js/jquery.js"></script>
    <script src="/_js/bootstrap.js"></script>
</body>

</html>