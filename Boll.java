# faculty
code i learned in college
package br.com.unicuritiba;

import java.util.Random;
import java.util.Scanner;
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
				
		
		System.out.println("acerte o numero de um a dez,quero ver se vc e bom mesmo!");		
		Scanner scanner = new Scanner(System.in);
		int valor = new Random().nextInt(11);
		int contador = 0;
		int n = 10;
		
		
		
		while (contador < 10) {
			int tentativa = scanner.nextInt();
		
			if(tentativa == valor)
	{
				System.out.print("Parabens, vc acertou");
				contador = 5;
	}
	else
	{
		n = n - 1;
		System.out.print("desculpa, nao foi dessa fez " + n + " tentativas!\n");
		contador = contador + 1;
		}
				
		}		
	}

}
