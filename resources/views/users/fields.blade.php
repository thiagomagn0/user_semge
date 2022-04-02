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


<label>Cep:
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
           onblur="pesquisacep(this.value);" /></label><br />
    <label>Rua:
    <input name="street" type="text" id="street" size="60" /></label><br />
    <label>Número:
    <input name="number" type="text" id="number" size="60" /></label><br />
    <label>Bairro:
    <input name="complement" type="text" id="complement" size="40" /></label><br />
    <label>Cidade:
    <input name="city" type="text" id="city" size="40" /></label><br />
    <label>Estado:
    <input name="state" type="text" id="state" size="2" /></label><br />
    <label> País:
    <input name="country" type="text" id="country" size="20" /></label><br />


    <script>
    
        function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('street').value=("");
                document.getElementById('complement').value=("");
                document.getElementById('city').value=("");
                document.getElementById('state').value=("");
        }
    
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('street').value=(conteudo.logradouro);
                document.getElementById('complement').value=(conteudo.bairro);
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
                    document.getElementById('complement').value="...";
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
