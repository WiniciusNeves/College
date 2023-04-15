# faculty
code i learned in college

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
					
		int numeroVeiculos=5;
		String[] veiculo = new String[numeroVeiculos];
		
		Scanner scanner = new Scanner(System.in);
		System.out.println("cadastro de veiculo");
		
		for(int indice = 0; indice<numeroVeiculos; indice++) {
			System.out.println("digite o nome do veiculo");
			String nomeVeiculo = scanner.nextLine();
			
			  veiculo[indice] = nomeVeiculo;
			  
			}

			for(int contador = 0;contador<5;contador++)
			System.out.println("este e seu veiculo "+veiculo[contador]);
			
		}
		
		
	}

