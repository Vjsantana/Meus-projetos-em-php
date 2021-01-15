<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Cadastro projeto MR - Valmir</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h3>Cadastro de Médico Colaborador</h3>
               <br>
        Olá! seja bem vindo(a) a paltaforma "Médico Residente".
                <br>
        Por favor, preencha o formulário abaixo.
                <br>

        <form action="cadastro_script.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="varchar" class="form-control" name="nome">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço completo</label>
                <input type="varchar" class="form-control" name="endereco">
            </div>

            <div class="form-group">
                <label for="dt_nascimento">Data de nascimento</label>
                <input type="date" class="form-control" name="dt_nascimento">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="varchar" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="varchar" class="form-control" name="telefone">
            </div>

            <div class="form-group">
                <label for="crm">N° do CRM</label>
                <input type="varchar" class="form-control" name="crm">
            </div>

            <br>

            Agradecemos pelo seu cadastro. Agora, por gentileza, responda apropriadamente as questões a seguir:

            <br>
            <div>
                <label for="formacao">Qual a sua área de formação?</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option selected></option>
                <option value="1">Anestesiologia</option>
                <option value="2">Cardiologia</option>
                <option value="3">Cirurgia Geral</option>
                <option value="4">Cirurgia Plástica</option>
                <option value="5">Clínica Médica</option>
                <option value="6">Dermatologia</option>
                <option value="7">Ginecologia e Obstetrícia</option>
                <option value="8">Medicina do Trabalho</option>
                <option value="9">Medicina Intensiva</option>
                <option value="10">Oftalmologia</option>
                <option value="11">Ortopedia e Traumatologia</option>
                <option value="12">Otorrinolaringologia</option>
                <option value="13">Pediatria</option>
                <option value="14">Psiquiatria</option>
                <option value="15">Radiologia e Diagnóstico por Imagem</option>
            </select>
            </div>

            <div>
                <label for="especialidade">Informe aqui a sua especialidade</label>
                <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                    <option selected></option>
                    <option value="1">Acupuntura</option>
                    <option value="2">Alergia e Imunologia</option>
                    <option value="3">Anestesiologia</option>
                    <option value="4">Angiologia</option>
                    <option value="5">Cirurgia Cardiovascular</option>
                    <option value="6">Cirurgia da Mão</option>
                    <option value="7">Cirurgia de Cabeça e Pescoço</option>
                    <option value="8">Cirurgia do Aparelho Digestivo</option>
                    <option value="9">Cirurgia Geral</option>
                    <option value="10">Cirurgia Oncológica</option>
                    <option value="11">Cirurgia Pediátrica</option>
                    <option value="12">Cirurgia Plástica</option>
                    <option value="13">Cirurgia Torácica </option>
                    <option value="14">Cirurgia Vascular</option>
                    <option value="15">Coloproctologia</option>
                    <option value="16">Dermatologia</option>
                    <option value="17">Endocrinologia e Metabologia</option>
                    <option value="18">Endoscopia</option>
                    <option value="19">Gastroenterologia</option>
                    <option value="20">Geriatria</option>
                </select>
            </div>

            <div>
                <label for="anos_atuacao">Quantos anos de atução na área você tem?</label>
                <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                    <option selected></option>
                    <option value="1">Menos de 1 ano</option>
                    <option value="2">Entre 1 e 3 anos</option>
                    <option value="3">Entre 3 e 5 anos</option>
                    <option value="3">Entre 5 e 10 anos</option>
                    <option value="3">Mais de 10 anos</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
            </div>
        </div>
    </div>


 <br>




    <br>




    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected> Selecione a opção mais apropriada</option>
        <option value="1">Pediatra</option>
        <option value="2">Anatomia</option>
        <option value="3">Anatomia Sistêmica</option>
    </select>

</body>
</html>
