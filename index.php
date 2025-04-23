<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
 body {
  margin: 0;
  padding: 90px;
  background-color: white;
  font-family: Arial, sans-serif;
}

.flex-row {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  margin-bottom: 20px;
}

.container-custom,
.container-custom-eventos,
.container-custom-galeria {
  background-color: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  opacity: 1;
}

.container-custom {
  flex: 1 1 500px;
  max-width: 600px;
}

.container-custom-eventos {
  flex: 1 1 300px;
  max-width: 400px;
}

.container-custom-galeria {
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
}

.container-custom-comunicados {
  background-color: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  margin: 20px auto;
  max-width: 1000px;
}

.container-custom-administradores{
  background-color: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  margin: 20px auto;
  max-width: 1000px;
}

.container-custom-sugestoes,
.container-custom-sobre {
  flex: 1 1 450px; /* ocupa metade do espaço em telas grandes */
  max-width: 500px;
  background-color: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


  .form-label {
      color: #5e35b1;
  }

  .form-control {
      border: 1px solid #d1c4e9;
  }

  .form-control:focus {
      border-color: #a78bfa;
      box-shadow: 0 0 0 0.25rem rgba(167, 139, 250, 0.25);
  }

  .btn-primary {
      background-color: #facc15;
      border-color: #facc15;
      color: #fff;
  }

  .btn-primary:hover {
      background-color: #eab308;
      border-color: #eab308;
  }

  .text-center {
      color: #7e57c2;
  }

  #listagem li {
      color: #5e35b1;
      margin-bottom: 0.5rem;
  }

  /* #intro {
      position: fixed;
      top: 0; left: 0;
      width: 100vw;
      height: 100vh;
      background-image: url('Imagem grupo (1).webp');
      background-size: auto 100%;
      background-position: center;
      background-repeat: repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      font-family: 'Arial Black', sans-serif;
      color: #5e35b1;
      z-index: 9999;
      text-align: center;
      flex-direction: column;
      gap: 0.8rem;
  }

  #introText .linha {
      margin: 0;
      line-height: 1.2;
  }

  .word {
      display: inline-block;
      opacity: 0;
      transform: scale(0.5) translateY(20px);
  } */

  @media (max-width: 767px) {
    body {
      justify-content: center;
    }

    .container-custom {
      margin-right: 0;
    }
  }
</style>

  </style>
</head>
<body>
  <!-- <div id="intro">
      <div id="introText">
          <p class="linha">Bem-vindo</p>
          <p class="linha">ao site</p>
          <p class="linha">Beija Sapo!!</p>
      </div>
  </div> -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Beija Sapo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item">
            <a class="btn btn-danger" href="loginAdm.html">
              <i class="bi bi-shield-lock"></i> ADM
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info" href="loginUser.html">
              <i class="bi bi-person"></i> User
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success" href="cadastroUsuario.html">
              <i class="bi bi-person-plus"></i> Cadastre-se
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="galeria.php">
              <i class="bi bi-image"></i> Galeria
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Novo layout com duas colunas -->

      <!-- Lado direito com degradê e conteúdo centralizado -->
      <div class="flex-row">
        <div id="cadastro" class="container-custom">
          <h2 class="text-center mb-4" id="roleTitulo">Aguardando rolê...</h2>
          <form action="" class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" class="form-control mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" id="cidade" class="form-control mb-3">
          </form>
          <div class="d-flex gap-2 flex-wrap">
            <button type="button" id="btnEnviar" class="btn btn-warning">
              <i class="bi bi-send"></i> Enviar
            </button>
          </div>
          <ol id="listagem" class="mt-4"></ol>
        </div>
      
        <div class="container-custom-eventos">
          <h2 class="text-center mb-4" id="roleTitulo">Eventos do mês</h2>
          <ul id="listaEventos" class="list-group"></ul>
        </div>
      </div>
      
      <div class="container-custom-galeria">
        <h2 class="text-center mb-4">Galeria de Rolês</h2>
    
        <!-- Aqui começa o código PHP para os últimos rolês -->
        <div class="container mt-5">
            <h2 class="text-center mb-4">🎉 Últimos Rolês</h2>
            <?php
            $sqlAlbuns = "SELECT * FROM album ORDER BY id_album DESC LIMIT 2";
            $albuns = $conn->query($sqlAlbuns);
    
            if ($albuns->num_rows > 0) {
                while ($album = $albuns->fetch_assoc()) {
                    $id_album = $album['id_album'];
    
                    echo "<h4 class='text-primary mt-4'>" . htmlspecialchars($album['titulo_album']) . "</h4>";
                    echo "<div class='row'>";
    
                    $sqlImgs = "SELECT * FROM imagens WHERE id_album = $id_album LIMIT 3";
                    $imagens = $conn->query($sqlImgs);
    
                    while ($img = $imagens->fetch_assoc()) {
                        echo "<div class='col-md-4 mb-3'>";
                        echo "<img src='upload/" . $img['imagem'] . "' class='img-fluid rounded shadow'>";
                        echo "</div>";
                    }
    
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center'>Ainda não há álbuns cadastrados.</p>";
            }
            ?>
            <div class="text-center mt-4">
                <a href="galeria.php" class="btn btn-warning">Ver Galeria Completa</a>
            </div>
        </div>
        <!-- Fim do código PHP para os últimos rolês -->
    
    </div>

      <div class="container-custom-comunicados">
        <h2 class="text-center mb-4">Comunicados gerais</h2>
       
      </div>

      <div class="container-custom-administradores">
        <h2 class="text-center mb-4">Os Adm do grpo</h2>
      </div>

      <div class="flex-row">
        <div class="container-custom-sugestoes">
          <div id="formSugestoesReclamacoes">
            <h5 class="text-center mb-4" id="roleTitulo">Sugestões/Reclamações</h5>
            <form id="sugestoesReclamacoesForm">
              <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-select" id="tipo" required>
                  <option value="sugestao">Sugestão</option>
                  <option value="reclamacao">Reclamação</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" required>
              </div>
              <div class="mb-3">
                <label for="sobreAlguem" class="form-label">É sobre alguém?</label>
                <select class="form-select" id="sobreAlguem" required>
                  <option value="nao">Não</option>
                  <option value="sim">Sim</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="mensagemSugestao" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagemSugestao" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
            <div id="sugestoesStatus" class="mt-2 text-success" style="display:none;">Sugestão/Reclamação enviada com sucesso!</div>
          </div>
        </div>
      
        <div class="container-custom-sobre">
          <h2 class="text-center mb-4" id="roleTitulo">Sobre o grupo</h2>
          <p>Informações e orientações gerais sobre o grupo podem ser colocadas aqui.</p>
        </div>
      </div>
      
    <!-- SplitType para dividir o texto por palavra -->
    <!-- <script src="https://unpkg.com/split-type"></script>
    GSAP
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> --> -->

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-app.js";
        import { getFirestore, collection, getDocs, orderBy, query, limit, addDoc } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-firestore.js";

  //       window.addEventListener("load", () => {
  // const lines = document.querySelectorAll('#introText .linha');

  // lines.forEach(linha => {
  //   const split = new SplitType(linha, { types: 'words' });

  //   gsap.to(split.words, {
  //     opacity: 1,
  //     scale: 1,
  //     y: 0,
  //     stagger: 0.15,
  //     duration: 2,
  //     ease: "back.out(1.7)"
  //   });
  // });

  // Ocultar o intro depois de um tempo
//    gsap.to("#intro", {
      // opacity: 0,
//       duration: 3,
//       onComplete: () => {
//         document.getElementById("intro").style.display = "none";
//         gsap.to("#cadastro", { duration: 1, opacity: 1 });
//       }
//     });
//   }, 3500);
// });
    
        const firebaseConfig = {
            apiKey: "AIzaSyDkMTTM5yJbyIzjCl3vovJXx1dlNEX2IpU",
            authDomain: "beija-sapo.firebaseapp.com",
            projectId: "beija-sapo",
            storageBucket: "beija-sapo.firebasestorage.app",
            messagingSenderId: "429297677162",
            appId: "1:429297677162:web:3792b9546b7b44a16e6b13"
        };
    
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);
        

        const listagem = document.getElementById("listagem");
        const nomeInput = document.getElementById("nome");
        const cidadeInput = document.getElementById("cidade");
    
        let participantes = [];
        let chaveStorage = null;
        let idDoRoleAtual = null;
    
        function atualizarListaNaTela() {
            listagem.innerHTML = "";
            participantes.forEach(p => {
                const li = document.createElement("li");
                li.textContent = `${p.nome} - ${p.cidade}`;
                listagem.appendChild(li);
            });
        }
    
        // Buscar o último rolê criado
        
        async function fetchLastRole() {
            const q = query(collection(db, "roles"), orderBy("dataRole", "desc"), limit(1));
            const querySnapshot = await getDocs(q);

            if (!querySnapshot.empty) {
                const docRef = querySnapshot.docs[0];
                const role = docRef.data();
                idDoRoleAtual = docRef.id; // <- aqui salvamos o ID do documento

                const nomeRole = role.nomeRole;
                const dataRole = role.dataRole;

                chaveStorage = `participantes_${nomeRole}_${dataRole}`;
                participantes = JSON.parse(localStorage.getItem(chaveStorage)) || [];

                document.getElementById("roleTitulo").textContent =
                    `Cadastro para: ${nomeRole} - ${dataRole} às ${role.horaRole} (${role.enderecoRole})`;
            } else {
                document.getElementById("roleTitulo").textContent = "Nenhum rolê encontrado.";
            }

            atualizarListaNaTela();
        }
        
        // Inicializar página
        fetchLastRole();
    
        // Enviar novo cadastro
        document.getElementById("btnEnviar").addEventListener("click", async () => {
            const nome = nomeInput.value.trim();
            const cidade = cidadeInput.value.trim();
    
            if (nome && cidade && chaveStorage) {
                const novoParticipante = { nome, cidade };
                participantes.push(novoParticipante);
                localStorage.setItem(chaveStorage, JSON.stringify(participantes));
                atualizarListaNaTela();
    
                nomeInput.value = "";
                cidadeInput.value = "";
    
            try {
              await addDoc(collection(db, "pessoas"), {
                  nome,
                  cidade,
                  data: new Date(),
                  idRole: idDoRoleAtual // <- salvando o ID do rolê aqui
              });
              console.log("Salvo no Firebase com sucesso!");
          } catch (e) {
              console.error("Erro ao salvar:", e);
            }
            } else {
                alert("Preencha os dois campos!");
            }
        });

        document.getElementById("sugestoesReclamacoesForm").addEventListener("submit", async (e) => {
  e.preventDefault();

  const tipo = document.getElementById("tipo").value;
  const titulo = document.getElementById("titulo").value;
  const sobreAlguem = document.getElementById("sobreAlguem").value;
  const mensagem = document.getElementById("mensagemSugestao").value;

  try {
    await addDoc(collection(db, "sugestoesReclamacoes"), {
      tipo,
      titulo,
      sobreAlguem,
      mensagem,
      timestamp: new Date()
    });

    // Resetar o formulário
    e.target.reset();

    // Mostrar mensagem de sucesso
    const sucessoMsg = document.createElement("p");
    sucessoMsg.textContent = "Reclamação/Sugestão enviada com sucesso!";
    sucessoMsg.style.color = "green";
    sucessoMsg.style.marginTop = "10px";
    document.getElementById("sugestoesReclamacoesForm").appendChild(sucessoMsg);

    // Remover a mensagem após alguns segundos
    setTimeout(() => {
      sucessoMsg.remove();
    }, 5000);

  } catch (error) {
    console.error("Erro ao enviar sugestão:", error);
  }
});

const listaEventos = document.getElementById('listaEventos');

async function carregarEventos() {
  try {
    console.log('Tentando carregar os eventos do mês...');
    const querySnapshot = await getDocs(collection(db, 'eventosMes'));
    listaEventos.innerHTML = '';

    if (querySnapshot.empty) {
      console.log('Nenhum evento encontrado.');
    }

    querySnapshot.forEach((doc) => {
      const dados = doc.data();
      console.log('Evento encontrado:', dados);

      const li = document.createElement('li');
      li.className = 'list-group-item d-flex justify-content-between align-items-center';
      li.textContent = dados.descricao;

      listaEventos.appendChild(li);
    });

    console.log('Eventos carregados com sucesso.');
  } catch (error) {
    console.error('Erro ao carregar os eventos:', error);
  }
}

carregarEventos();
    </script>
</body>
</html>