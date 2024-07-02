Algoritmo "Fibonacci"

Var
   n, i, a, b, c : Inteiro

Inicio
   Escreva("Digite a quantidade de termos da sequência de Fibonacci: ")
   Leia(n)

   a <- 0
   b <- 1
   Escreva(a, ", ", b)

   Para i <- 3 ate n Faca
      c <- a + b
      Escreva(", ", c)
      a <- b
      b <- c
   FimPara

Fimalgoritmo
