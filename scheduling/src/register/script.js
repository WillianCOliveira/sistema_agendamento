function verificarSenha() {
    const senhaCorreta = "12345"; // Defina a senha correta aqui
    const senhaInput = document.getElementById("senha").value;

    if (senhaInput === senhaCorreta) {
        const usuarioDiv = document.getElementById("usuario-div");
        const usuarioInput = document.getElementById("usuario");

        usuarioDiv.classList.remove("hidden");
        usuarioInput.disabled = false;
    } else {
        alert("Senha incorreta!");
    }
}