# faculty
code i learned in college
import java.util.Scanner;
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		int NumeroCarros = 10 ; 
		int media = 0;
		int[] vetorvoltas = new int [NumeroCarros];
		Scanner scanner = new Scanner(System.in);
		int contador=1;
			
		for(int indice = 0; indice < NumeroCarros; indice++) {
			System.out.println("informe o numero de voltas em segundos do "+contador+" carro");
			int volta = scanner.nextInt();
			vetorvoltas[indice] = volta;
			media += volta;
			contador++;
		}
		
		int voltaMR =0;
		for(int ind=0;ind < NumeroCarros; ind++) {
			int volta = vetorvoltas[ind];
			if (voltaMR > volta || ind==0) {
				voltaMR = volta;
			}
		}
		
		int voltaSMR = 9999999;
		for (int indV2 = 0;indV2 < NumeroCarros; indV2++) {
			int volta2 = vetorvoltas[indV2];
			if (volta2 > voltaMR && voltaSMR > volta2) {
				voltaSMR = volta2;
			}
		}		
		
		int voltaTMR = 9999999;
		for (int indV3 = 0;indV3 < NumeroCarros; indV3++) {
			int volta3 = vetorvoltas[indV3];
			if (volta3 > voltaSMR && voltaTMR > volta3) {
				voltaTMR = volta3;
			}
		}		
		
		
		int voltaML =0;
		for(int indL=0;indL < NumeroCarros; indL++) {
			int volta = vetorvoltas[indL];
			if (voltaML < volta || indL==0) {
				voltaML = volta;
			}
		}
		
		System.out.println("este e a volta do carro mais rapido: "+voltaMR);
		System.out.println("este e a volta do Segundo carro mais rapido: "+voltaSMR);
		System.out.println("este e a volta do Terceiro carro mais rapido: "+voltaTMR);
		System.out.println("esta e sua media em segundos: "+ media/10);
		System.out.println("este e a diferença entre o ultimo e o primeiro: "+(voltaML - voltaMR ));
		
		
	
	}

}
