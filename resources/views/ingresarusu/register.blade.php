<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login - @programador.cs</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <main class="card">
        <section class="esquerda">
            <img src="./Mookup/ic-logo.png" alt="Imagem logo" class="imagem__logo" />
            <h3 class="titulo__login">Login</h3>
            <span class="subtitulo">Acesse a plataforma do @programador.cs!</span>
            <form>
                <section class="caixa__input">
                    <label>Email</label>
                    <input type="text" placeholder="Email" />
                </section>
                <section class="caixa__input">
                    <label>Senha</label>
                    <input type="password" placeholder="Senha" />
                </section>
            </form>
            <section class="controle__salvamento">
                <span class="esqueceu__senha">
                    Esqueceu sua senha?
                </span>
            </section>
            <section class="controle__acesso">
                <button type="submit">Login</button>
                <button class="botao__registrar">
                    <span class="botao__registrar--texto">Registrar</span>
                </button>
            </section>
          
        
        </section>
        <section class="direita">
            <div class="background__imagem">
                <div class="detalhe__vidro">
                    <div class="detalhe__vidro--interno">
                        <span>Consultorio Tecnologico</span>
                    </div>
                </div>
                <div class="text-align:center ">
                  <img src="{{asset('images/logo2.png') }}" alt="Imagem fundo">
                </div>
                
            </div>
        </section>
    </main>
    <script src="./script/script.js"></script>
</body>

</html>