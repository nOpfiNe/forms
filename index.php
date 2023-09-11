<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <!--Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class="container card text-bg-white  border border-3 border-dark p-3 mb-3">
        <h1 class="align-self-center">Informações</h1>

        <form action="dados.php" method="POST" >
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="pb-2" for="idNome">Nome</label>
                    <input type="text" name="campoNome" placeholder="Digite seu nome..." id="idNome" class="form-control border border-2 border-warning focus-ring focus-ring-sencodary">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="pb-2" for="idEmail">Email</label>
                    <input type="text" name="campoEmail" placeholder="Digite seu email..." id="idEmail" class="form-control border border-2 border-warning focus-ring focus-ring-light">
                </div>
            </div>

            <div class="mb-3">
                <label class="pb-2" for="idEnder">Endereço</label>
                <input type="text" name="campoEnder" placeholder="Digite seu endereço..." id="idEnder" class="form-control border border-2 border-warning focus-ring focus-ring-light">
            </div>

            <div class="mb-3">
                <label class="pb-2" for="idMsg" class="form-label">Dúvidas:</label>
                <textarea name="campoMsg" class="form-control border border-2 border-warning focus-ring focus-ring-light" id="idMsg" rows="3"></textarea>
            </div>

            <fieldset>
                <label class="pb-2" for="idRadio" class="form-label">Tipo de compra:</label>
                <div>
                    <input type="radio"  name="campoRadio" id="idRadio">
                    <label for="idRadio1">SUV</label>
                </div>

                <div>
                    <input type="radio" name="campoRadio" id="idRadio">
                    <label for="idRadio1">4x4</label>
                </div>

                <div>
                    <input type="radio" name="campoRadio" id="idRadio">
                    <label for="idRadio1">Conversive</label>
                </div>
                <div>
                    <input type="radio" name="campoRadio" id="idRadio">
                    <label for="idRadio1">Sedan</label>
                </div>
            </fieldset>

            <select class="form-select border border-2 border-warning mt-2 focus-ring focus-ring-light" aria-label="Default select example">
                <option selected="">Voce assinou nosso contrato?</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class=" mt-4 btn btn-outline-warning d-flex align-self-center">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>