package verificacaoparouimpar;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.print("escolha um número");
      Scanner scanner = new Scanner(System.in);
		
		int numero1 = scanner.nextInt();
           
        int res = numero1;
         
        if(res %2 == 0)
        {
        	System.out.print("seu numero e par"); 
		}
        else
        {
        System.out.print("seu numero e impar ");
        }
	}
}
