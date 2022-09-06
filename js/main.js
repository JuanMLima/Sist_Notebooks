document.getElementById('formulario').addEventListener('submit', cadastraSaida);

function cadastraSaida(e){
    var nomeAluno = document.getElementById('nomeAluno').value;
    var matricula = document.getElementById('matricula').value;
    var nnote = document.getElementById('nnote').value;
    var sala = document.getElementById('sala').value;
    var time = new Date();

    aluno = {
        nome: nomeAluno,
        matricula: matricula,
        note: nnote,
        sala: sala,
        hora: time.getHours(),
        minutos: time.getMinutes()

    }

    
    console.log(aluno);

    if(localStorage.getItem('carrinhos') === null){
        var alunos = [];
        alunos.push(aluno);
        localStorage.setItem('carrinhos', JSON.stringify(alunos));
    }else{
        var alunos = JSON.parse(localStorage.getItem('carrinhos'));
        alunos.push(aluno);
        localStorage.setItem('carrinhos', JSON.stringify(alunos));
    }

    mostraCarrinho();
    form.reset();
    e.preventDefault();
}

function apagarAluno(matricula){
    var alunos = JSON.parse(localStorage.getItem('carrinhos'));

    for(var i = 0; i < alunos.length; i++){
        if(alunos[i].matricula == matricula){
           alunos.splice(i, 1);
        }

        localStorage.setItem('carrinhos', JSON.stringify(alunos));
    }
    mostraCarrinho();
}


function mostraCarrinho(){
    var alunos = JSON.parse(localStorage.getItem('carrinhos'));
    var alunosResultado = document.getElementById('resultados');

    alunosResultado.innerHTML = '';

    for(var i = 0; i < alunos.length; i++){
                var nome = alunos[i].nome;
                var matricula = alunos[i].matricula;
                var note = alunos[i].note;
                var sala = alunos[i].sala;
                var hora = alunos[i].hora;
                var minutos = alunos[i].minutos;

        alunosResultado.innerHTML +='<tr><td>' + nome + 
                                    '</td><td>' + matricula +
                                    '</td><td>' + note +
                                    '</td><td>' + sala +
                                    '</td><td>' + hora + ':' + minutos + 
                                    '</td><td><button class="btn btn-danger" onclick="apagarAluno(\''+ matricula +'\')">Devolvido!</button></td>' +
                                    '</tr>';
    }
}