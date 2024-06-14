<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO clientes (nome, telefone, endereco, email, data_nascimento, genero)
    VALUES ('$nome', '$telefone', '$endereco', '$email', '$data_nascimento', '$genero')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo cliente criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Adicionar Cliente</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="estilos/Tipografia.css">
    <link rel="stylesheet" href="estilos/layout-php.css">
    <link rel="stylesheet" href="estilos/layout-pagina-computador.css">
    <link rel="stylesheet" href="estilos/layout-mobile.css" media="screen and (min-width:300px) and (max-width:812px)">

</head>

<body>

    <section class="banner-header-topo">
        <div id="phone-topo-mestre">
            <i class="fa-solid fa-phone"></i>
            <h6 class="h6-topo">(32) 99195-1263</h6>
            <i class="fa-solid fa-envelope"></i>
            <h6 class="h6-topo">contato@alphatechsistemas.com</h6>
        </div>
        <div id="icones-sociais-topo">
            <a href="#" class="icones-banner-topo"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="#" class="icones-banner-topo"><i class="fa-brands fa-linkedin" id="linkedin-topo"></i></a>
            <a href="#" class="icones-banner-topo"><i class="fa-brands fa-instagram" id="instagran-topo"></i></a>
        </div>
    </section>

    <section id="nav" class="fixar">
        <nav id="nav-mestre">
            <div id="div-logo-esquerda" href="#">
            </div>
            <div id="div-nav-menu-direita">
                <ul id="menu-principal">
                    <li><a class="link" href=index.html>Home</a></li>
                    <li><a class="link" href="#">Soluções</a></li>
                    <li><a class="link" href="#">Suporte</a></li>
                    <li><a class="link" href="#">Contato</a></li>
                </ul>
                <div id="nav-user">
                    <a id="user" href=clientes.php><i class="fa-solid fa-circle-user"></i></i></a>
                </div>
            </div>
        </nav>
    </section>

    <h2>Adicionar Clientes</h2>
    <section class="fomularios" id="adicionar-clientes">
        <form method="post" action="" id="form-adict">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento"><br><br>

            <label for="genero">Gênero:</label><br>
            <select id="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select><br><br>

            <input type="submit" value="Adicionar">
        </form>
        <a href="clientes.php">Voltar</a>
    </section>
</body>
<footer>
    <div id="div-master-footer">
        <section id="informacoes-footer">

            <div id="logo-alphatech">
                <a href="#"><img src="imagens/logo-ats-transparente.png" alt=""></a>
            </div>

            <div class="footer-box-wrap">
                <h4 class="titulos-footer">Institucional</h4>
                <div class="footer-conteudo">
                    <ul>
                        <li><a class="link-footer" href="#">Sobre</a></li>
                        <li><a class="link-footer" href="#">Cultura</a></li>
                        <li><a class="link-footer" href="#">Trabalhe Conosco</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box-wrap">
                <h4 class="titulos-footer">Nossas Soluções</h4>
                <div class="footer-conteudo">
                    <ul>
                        <li id="link-footer"><a class="link-footer" href="#">Pequenas Empresas</a></li>
                        <li id="link-footer"><a class="link-footer" href="#">Rede de Lojas</a></li>
                        <li id="link-footer"><a class="link-footer" href="#">Bares e Rstaurantes</a></li>
                        <li id="link-footer"><a class="link-footer" href="#">Auto Centers</a></li>
                        <li id="link-footer"><a class="link-footer" href="#">Distribuidoras</a></li>
                        <li id="link-footer"><a class="link-footer" href="#">Indústrias</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-box-wrap">
                <h4 class="titulos-footer">Área do Cliente</h4>
                <div class="footer-conteudo">
                    <a href="#"><i class="fa-regular fa-handshake"></i></a>
                </div>
            </div>

            <div class="footer-box-wrap">
                <h4 class="titulos-footer">Redes Sociais</h4>
                <div class="footer-conteudo" id="sociais-footer">
                    <a href="#"><i class="fa-brands fa-linkedin" id="linkedin-footer"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" id="instagram-footer"></i></a>
                </div>
            </div>

            <div class="footer-box-wrap">
                <h4 class="titulos-footer">Contatos</h4>
                <div class="footer-conteudo">
                    <ul>
                        <li>
                            <p class="conteudo-footer">(32) 99922-4400</p>
                        </li>
                        <li>
                            <p class="conteudo-footer">(32) 99195-1263</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="copyright">
            <div class="copyright-wrap">
                <P class="conteudo-footer" id="p-copyright"> &#169;Copyright - Alpha Tech Sistemas - Todos os direitos reservados</P>
            </div>
        </section>
    </div>
</footer>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/sticky.min.js" integrity="sha512-O5YCLUxCY2OBc4rfpnKUIgE4LGuCiW8CrJ7ty4hvkBAAKUOnlbomEFWd3a6ruRnFvO3LG2wiaGiJ1heOvdppvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="_scripts/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
        widgetcode: "6f7739c18d41def8142fc69b47cce78edddb44694a480e271b8a4b3d9ea1882c6af51ace3bd48666749b66d6bc292ef1",
        values: {},
        ready: function() {}
    };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zoho.com/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
    d.write("<div id='zsiqwidget'></div>");
</script>

<?php $conn->close(); ?>