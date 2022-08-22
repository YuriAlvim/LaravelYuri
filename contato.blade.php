<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarbleCats | Página de Contato</title>
    <link rel="stylesheet" href="css/marblecss.css">
    <link rel="shortcut icon" href="img/MarbleCats_logo2nobg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="bgcontato">
    <header class="row header">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
              <div>
                <h3 class="float-md-start mb-0" ></h3>
                <nav class="nav nav-masthead justify-content-center ">
                  <a class="nav-link active" href="jogos.html">Jogos</a>
                  <a class="nav-link active" href="novidades.html">Novidades</a>
                  <a class="nav-link active" href="index.html"><img src="img/MarbleCats_logo2nobg.png" alt="Logo da MarbleCats" id="logo"></a>
                  <a class="nav-link active" href="equipe.html">Equipe</a>
                  <a class="nav-link active" aria-current="page" href="contato.html">Contato</a>
                </nav>
              </div>
            </header>
        
            

        </nav>
    </header>
    <main class="container content ">
        <form>
            <div class="row">
                <label for="exampleFormControlInput1">Nome</label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" required="" type="text" maxlength="20" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>
        </form>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required="" type="text" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Número de telefone</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
            </div>
            <div class="form-group">
                <label class="col-md-1 control-label" for="Nome">Nascimento</label>  
                <div class="col-md-2">
                <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
              </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Assunto da Mensagem</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Selecione um assunto</option>
                    <option>Jogos</option>
                    <option>Bugs</option>
                    <option>Compras</option>
                    <option>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </form>
        </form>
    </main>
    
    <footer class="mt-auto text-white-50 text-center">
        <p>Trabalho de TDS - SOP - Yuri / Gulherme / Yasmin / Gabryel</p>
      </footer>
      </div>
</div>
</body>

</html>