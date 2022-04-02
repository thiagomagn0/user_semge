<!-- Name Field -->
<div class="form-group col-md-2">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-md-3">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-3 ">
    {!! Form::label('password', 'Senha:') !!}
    {!! Form::text('password',null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-3 ">
    {!! Form::label('cpf', 'CPF:') !!}
    {!! Form::text('cpf',null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<div class="form-group col-sm-3 ">
    {!! Form::label('birth_date', 'Data de nascimento:') !!}
    {!! Form::date('birth_date',null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Telefone:
    <input class="form-control" name="phone" type="text" id="phone" size="40" /></label><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h3>Dados de Endereço</h3>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label>Cep:
    <input class="form-control" rows="50"name="cep" type="text" id="cep" value="" size="13" maxlength="9"
           onblur="pesquisacep(this.value);" /></label>
           &nbsp;&nbsp;&nbsp;
    <label>Rua:
    <input class="form-control" name="street" type="text" id="street" size="58" /></label><br />
    &nbsp;&nbsp;&nbsp;
    <label>Bairro:
    <input class="form-control" name="district" type="text" id="district" size="23" /></label><br />
    <label>Número:
    <input class="form-control" name="number" type="text" id="number" size="13" /></label><br />
    &nbsp;&nbsp;&nbsp;
    <label>Complement:
    <input class="form-control" name="complement" type="text" id="complement" size="40" /></label><br />
    &nbsp;&nbsp;&nbsp;
    <label>Cidade:
    <input class="form-control" name="city" type="text" id="city" size="42" /></label><br />
    &nbsp;&nbsp;&nbsp;
    <label>Estado:
    <input class="form-control" name="state" type="text" id="state" size="2" /></label><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>País:
        <input class="form-control" name="country" type="text" id="country" size="40" /></label><br />
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- Ramal Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
    {!! Form::hidden('admin', 0) !!}
    {!! Form::checkbox('admin', '1', null,array('data-toggle'=>'toggle','data-on'=>'ON','data-off'=>'OFF ')) !!}
    {!! Form::label('admin', 'Admin', ['class' => 'form-check-label']) !!}
    </div>
</div>
<!-- Ramal Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
    {!! Form::hidden('supervisor', 0) !!}
    {!! Form::checkbox('supervisor', '1', null,array('data-toggle'=>'toggle','data-on'=>'ON','data-off'=>'OFF ')) !!}
    {!! Form::label('supervisor', 'Supervisor', ['class' => 'form-check-label']) !!}
    </div>
</div>
<!-- Ramal Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
    {!! Form::hidden('operator', 0) !!}
    {!! Form::checkbox('operator', '1', null,array('data-toggle'=>'toggle','data-on'=>'ON','data-off'=>'OFF ')) !!}
    {!! Form::label('operator', 'Operador', ['class' => 'form-check-label']) !!}
    </div>
</div>


    <script>
    
        function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('street').value=("");
                document.getElementById('district').value=("");
                document.getElementById('city').value=("");
                document.getElementById('state').value=("");
        }
    
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('street').value=(conteudo.logradouro);
                document.getElementById('district').value=(conteudo.bairro);
                document.getElementById('city').value=(conteudo.localidade);
                document.getElementById('state').value=(conteudo.uf);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }
            
        function pesquisacep(valor) {
    
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');
    
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
    
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
    
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
    
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('street').value="...";
                    document.getElementById('district').value="...";
                    document.getElementById('city').value="...";
                    document.getElementById('state').value="...";
    
                    //Cria um elemento javascript.
                    var script = document.createElement('script');
    
                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
    
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
    
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        
        <script type="text/javascript">
            $("#phone").mask("(00) 00000-0000");
            </script>
    