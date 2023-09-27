function cambiarColorFondo() {
    const colores = ["#FFFFFF","#475353", "#91D675 ", "#D67575 "];
    
    const indice = Math.floor(Math.random() * colores.length);
    
    document.body.style.backgroundColor = colores[indice];
  }
  