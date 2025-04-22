function mostrarDetalhes() {
    const estoque = Math.floor(Math.random() * 50 + 1); 
    document.getElementById("estoque").textContent = `Quantidade em estoque: ${estoque}`;
  }
  