package br.com.unicuritiba;
import java.util.Scanner;
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner idade01 = new Scanner(System.in);
		int cont = 1;
		int idadenum=0;
		int MM20=0;
		String sexo;
		for(int i=0; i<3;i++ ) {
			System.out.println("Pessoa: "+cont);
			System.out.print("informe seu idade:");
			int idade = idade01.nextInt();
		idade01.nextLine();
		System.out.println("Sexo(Masculino/ferminino), por favor so coloca o inicial de cada um delas");
		sexo = idade01.nextLine();
		idadenum+= idade;
		cont++;
		 if (sexo.equalsIgnoreCase("F") && idade > 20) {
			MM20++;
		}
	}
		double media = idadenum / 10.0; 
		System.out.println("A media é: "+media+"\n");
		System.out.println("As mulheres com mais de 20 anos: "+MM20+"\n");
		
	}

}
