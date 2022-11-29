<h1>Cadastro de clientes</h1>
<form action="?controller=client&action=registerView" method="post">
    <div class="mt-3 mb-3 form-group">
        <label class="form-label" for="">Nome</label>
        <input class="form-control" type="text" class="form-control" name="name" required>
    </div>
    <div class="mt-3 mb-3 form-group">
        <label class="form-label" for="">Email</label>
        <input class="form-control" type="email" class="form-control" name="email" required>
    </div>
    <div class="mt-3 mb-3 form-group">
        <label class="form-label" for="">Telefone</label>
        <input class="form-control" type="text" class="form-control" name="phone">
    </div>


    <div class="mt-3 mb-3 form-group">
        <div class="radio">
            <label><input type="radio" name="gender" value="female" checked>Feminino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="male">Masculino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="other">Outro</label>
        </div>
    </div>


    <div class="mt-3 mb-3 checkbox">
        <label class="form-check-label"> Opção </label><br>
        <input class="form-check-input" type="checkbox" name="accept">Desejo receber os comunicados do site. <br>
        <input class="form-check-input" type="checkbox" name="noAccept">Não desejo receber os comunicados do site. <br>
        <input class="form-check-input" type="checkbox" name="pass">Só estou de passagem.

    </div>


    <div class="input-group mb-3">
        <select class="form-select" name="turno">
            <option value="morning">Manhã</option>
            <option value="afternoon">Tarde</option>
            <option value="night">Noite</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>