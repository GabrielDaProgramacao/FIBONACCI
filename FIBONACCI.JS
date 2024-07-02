function fibonacci(n) {
    if (n <= 1) {
      return n;
    }
    return fibonacci(n - 1) + fibonacci(n - 2);
  }
  
  // Solicitar o número de termos da sequência de Fibonacci
  let numTermos = prompt("Digite o número de termos da sequência de Fibonacci:");
  
  // Exibir a sequência de Fibonacci
  console.log("Sequência de Fibonacci:");
  for (let i = 0; i < numTermos; i++) {
    console.log(fibonacci(i));
  }