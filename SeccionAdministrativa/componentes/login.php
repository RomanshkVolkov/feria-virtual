

<?php echo  '

<form class="needs-validation"  action="" method="post" >

    <br />



<div class="input-div one">

    <div class="i">

        <i class="fas fa-user"></i>

    </div>

    <div class="div">

        <br />

        <input type="text" class="input custom-control-label" id="UsuarioL" name="username" placeholder="Usuario">

        <br>



        <br>



        <div class="valid-feedback" style="width: 100%;">

            ok!

        </div>

        <div class="invalid-feedback" style="width: 100%;">

            Nombre de usuario no valido

        </div>

    </div>

</div>

<br>

<div class="input-div pass input-group">

    <div class="i">

        <i class="fas fa-lock"></i>

    </div>

    <div class="div">

        <input type="password" class="input custom-control-label " id="contrasenaL" name="password" placeholder="Contraseña"

        <br>

        <br>

        <!--  textos de ayuda -->

        <div class="valid-feedback" style="width: 100%;"> ok! Valido </div>

        <div class="invalid-feedback">

            Contraseña invalida

        </div>

    </div>

</div>



<br>



<button class="btnL btn btn-primary btn-lg btn-block" type="submit" id="bEnviarL" value="Ingresar" name="Ingresar" >Ingresar

</button>

</form>	




'; ?>