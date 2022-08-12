//Validação simples
$(document).on('click', '#publicarVaga',function(e) {
    
    $("#formVaga").validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            titulo: {
                required:true
            },
            cargo: {
                required:true
            },
            tipo_de_vaga: {
                required:true
            },
            forma_de_trabalho: {
                required:true
            },
            estado: {
                required:true
            },
            cidade: {
                required:true
            },
            salario: {
                required:true
            },
            descricao: {
                required:true
            },
            requisitos: {
                required:true
            },
        },
        messages: {
            email: {
                required: 'Este campo é obrigatório',
                email: 'Email inválido'
            },
            titulo: {
                required: 'Este campo é obrigatório',
            },
            cargo: {
                required: 'Este campo é obrigatório',
            },
            tipo_de_vaga: {
                required: 'Este campo é obrigatório',
            },
            forma_de_trabalho: {
                required: 'Este campo é obrigatório',
            },
            estado: {
                required: 'Este campo é obrigatório',
            },
            cidade: {
                required: 'Este campo é obrigatório',
            },
            salario: {
                required: 'Este campo é obrigatório',
            },
            descricao: {
                required: 'Este campo é obrigatório',
            },
            requisitos: {
                required: 'Este campo é obrigatório',
            },
        },


    });

    // Verificar se requisição passou pelas regras de validate
    if($('#formVaga').valid()) {

        e.preventDefault();
   
        // Mandar pra rota store via ajax
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/store',
            method: 'post',
            data: $('#formVaga').serialize(),
            dataType: 'text',
            success: function(mensagem) {
                location.href = '/vagas/'+mensagem;
            }
        });
    
    }

    
});