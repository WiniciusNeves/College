# faculty
code i learned in college
package Pizzaria;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		System.out.println("Olá, seja bem vindo a pizzaria! Informe o numero seu pedido!\n Tulipa de chope = R$2,80\n Pizza mista = R$20,00\n Cada cobertura = R$1,50");
		System.out.println();
		System.out.print("Número de chopes: ");
		
		Scanner scanner = new Scanner(System.in);
		float ch = scanner.nextInt();
		
		System.out.print("Número de pizzas de 2 sabores: ");
		
		Scanner scanner2 = new Scanner(System.in);
		float pz = scanner2.nextInt();
		
		System.out.print("Deseja adicionar Borda?\n 1- Bordas\n 2- Sem Bordas\n Borta: ");
		
		Scanner scanner3 = new Scanner(System.in);
		float cob = scanner3.nextInt();
		
		if (cob == 1)
		{
			System.out.println("Bordas disponíveis: \n 1- Queijo\n 2- Presunto\n 3- Banana\n 4- Outras");
			System.out.println("Informe o número de Bordas: ");
			
			Scanner scanner4 = new Scanner(System.in);
			int ncob = scanner4.nextInt();
			
			System.out.print("Informe os sabores da Bordas: ");
			
			scanner.nextLine();
			String sab = scanner.nextLine();
		}
		else
		{
			System.out.print("Sem Bordas então!");
		}
		
		float bordasnum = cob;
		
		double qtdchope = ch * 2.80;
		float qtdpizza = pz * 20;
		double cobertura = bordasnum * 1.50;
		double total = qtdchope + qtdpizza + bordasnum;
		
		
		System.out.print("Seu pedido foi: "+ ch +" chopes, "+ pz +" pizzas, "+ bordasnum +" Bordas adicionais, dando um total de: "+ total +" reais");
	}

}
