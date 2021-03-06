<?php
include_once '../../controller/confeiteiro/confeiteiroController.php';
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="../bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="../bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="../bootstrap/css/animate.css" rel="stylesheet" />
        <link href="../bootstrap/css/style.css" rel="stylesheet">
        <link href="../bootstrap/color/default.css" rel="stylesheet">
        <!-- JavaScript de Validações -->
        <script type="text/javascript" src="../../view/js/jquery-2.2.2.js"></script>
        <script type="text/javascript" src="../../view/js/funcoes.js"></script>
        <script type="text/javascript" src="js/confeiteiro.js"></script>

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro-pages">

            <div class="slogan">
                <a href="/Mar-de-Sabores/view/confeiteiro/indexConfeiteiro.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>
            <div class="page-scroll">
                <a href="#about">
                    <i class="fa fa-angle-down fa-5x animated"></i>
                </a>
            </div>
        </section>
        <!-- /Section: intro -->

        <!-- Section: Formulario PF -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">

                            <div class="section-heading">
                                <div class="wow bounceInDown" data-wow-delay="0.4s">
                                    <h2>cadastro confeiteiro</h2>
                                </div>
                                <p class="wow lightSpeedIn" data-wow-delay="0.3s">Em poucos minutos você fazerá parte de nossa rede.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-wrapper marginbot-50">
                            <form id="contact-form" name="formConfeiteiro" method="POST" action="../../controller/confeiteiro/confeiteiroController.php">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nmConfeiteiro" value="<?= $_SESSION['nome'] ?>"name="nmConfeiteiro" placeholder="Seu nome" title="Aqui é seu nome" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">

                                            <select class="form-control" id="sgSexo" name="sgSexo">
                                                <option value="<?= $_SESSION['sgSexo'] ?>"><?php echo($_SESSION['sgSexo'] == 'F') ? 'Feminino' : 'Masculino'; ?></option>
                                                <option value="F">Feminino</option>
                                                <option value="M">Masculino</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-md-8">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="nmEmail" name="nmEmail" value="<?= $_SESSION['nmEmail'] ?>" placeholder="Seu email" title="Aqui é seu email" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="dtNascimento" name="dtNascimento" value="<?= $_SESSION['dtNascimento'] ?>" placeholder="Data de Nascimento" title="Aqui é sua data de nascimento"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdTelefone" name="cdTelefone" value="<?= $_SESSION['cdTelefone'] ?>" maxlength="" placeholder="Seu Telefone" title="Aqui é seu telefone residencial"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdCelular" name="cdCelular" value="<?= $_SESSION['cdCelular'] ?>" placeholder="Seu Celular" title="Aqui é seu celular pessoal" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdCpf" name="cdCpf" value="<?= $_SESSION['cdCpf'] ?>" onkeypress="mascara(this, '###.###.###-##');
                                                        return apenasNumeros(this);" maxlength="14" placeholder="Seu CPF" title="Aqui é seu cpf"/>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdCep" name="cdCep" value="<?= $_SESSION['cdCep'] ?>" onkeypress="mascara(this, '#####-###');
                                                        return apenasNumeros(this);" maxlength="9" placeholder="Seu CEP" title="Aqui é o CEP da sua residência"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nmLogradouro" name="nmLogradouro" value="<?= $_SESSION['nmLogradouro'] ?>" placeholder="Seu Endereço" title="Aqui é seu endereço residêncial" required="required"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nmComplemento" name="nmComplemento" value="<?= $_SESSION['nmComplemento'] ?>" placeholder="Complemento" title="Ex.: casa 1, apto 101, fundos" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nmBairro" name="nmBairro" value="<?= $_SESSION['nmBairro'] ?>" placeholder="Bairro" title="Aqui é o seu bairro" required="required"/>
                                            </div>                 
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nmCidade" name="nmCidade" value="<?= $_SESSION['nmCidade'] ?>" placeholder="Cidade" title="Aqui é a sua cidade" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sgUf" name="sgUf" value="<?= $_SESSION['sgUf'] ?>" placeholder="Cidade" title="Aqui é a sua cidade" required="required"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmRazaoSocial" name="nmRazaoSocial" value="<?= $_SESSION['nmRazaoSocial'] ?>" placeholder="Razão Social" title="Aqui é seu nome"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmFantasia" name="nmFantasia" value="<?= $_SESSION['nmFantasia'] ?>" placeholder="Nome Fantasia" title="Aqui é seu nome"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdCnpj" name="cdCnpj" value="<?= $_SESSION['cdCnpj'] ?>" onkeypress="mascara(this, '##.###.###/####-##');
                                                        return apenasNumeros(this);" maxlength="18" placeholder="CNPJ" title=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="cdInscricaoEstadual" name="cdInscricaoEstadual" value="<?= $_SESSION['cdInscricaoEstadual'] ?>" placeholder="Inscrição Estadual" title="Digite novamente sua senha"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="senha">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="dsSenha" name="dsSenha" placeholder="Digite sua senha" title="Aqui é a sua senha" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="dsConfirmaSenha" name="dsConfirmaSenha" placeholder="Confirme sua senha" title="Digite novamente sua senha" required="required"/>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($_REQUEST['acao'] == 'alterar') { ?>
                                        <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="alterar"  onclick="return compararSenhas()">Alterar</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="cadastrar" onclick="return compararSenhas();
                                                return validarCPF()">Cadastrar</button>
                                    <?php } ?>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>	

            </div>
        </section>
        <!-- /Section: Formulario PF -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <p>&copy;Copyright 2016 . Mar de Sabores - O Portal do Confeiteiros</p>
                    </div>

                </div>	
            </div>
        </footer>

        <!-- Core JavaScript Files -->
        <script src="../bootstrap/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery.easing.min.js"></script>	
        <script src="../bootstrap/js/jquery.sticky.js"></script>
        <script src="../bootstrap/js/jquery.scrollTo.js"></script>
        <script src="../bootstrap/js/stellar.js"></script>
        <script src="../bootstrap/js/wow.min.js"></script>
        <script src="../bootstrap/js/owl.carousel.min.js"></script>
        <script src="../bootstrap/js/nivo-lightbox.min.js"></script>

        <script src="../bootstrap/js/custom.js"></script>

    </body>

</html>
