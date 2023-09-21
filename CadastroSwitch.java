# faculty
code i learned in college
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
					
		String c1="",c2="",c3="",c4="",c5="";
		
		Scanner scanner = new Scanner(System.in);
		System.out.println("cadastro de veiculo");
		
		for(int indice = 0; indice<5; indice++) {
			System.out.println("digite o nome do veiculo");
			String nomeVeiculo = scanner.nextLine();
			
			  
			switch(indice)
			{
			case 0:
			  c1 = nomeVeiculo;
			  	break;
			case 1:
			  c2 = nomeVeiculo;
				break;
			case 2:
			  c3 = nomeVeiculo;
				break;
			case 3:
			  c4 = nomeVeiculo;
			  	break;
			case 4:
		      c5 = nomeVeiculo;
		      	break;
			
			
			}
			
			
			
		}
				
			System.out.println("\no carro 1 é "+c1);
			System.out.println("o carro 2 é "+c2);
			System.out.println("o carro 3 é "+c3);
			System.out.println("o carro 4 é "+c4);
			System.out.println("o carro 5 é "+c5);
		
		
		
		
		
		
	}

}
