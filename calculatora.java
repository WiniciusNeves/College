package br.com.unicuritiba;
import java.util.Scanner;
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		 Scanner scanner = new Scanner(System.in);
		int resultado = 0;
	     System.out.println("digite a operação que deseja:");
	     System.out.println("1 - Soma");
	     System.out.println("2 - Subtração");
	     System.out.println("3 - multiplicação");
	     System.out.println("4 - divisão");


	        int opcao = scanner.nextInt();
	        
	        
	        System.out.println("Digite o operando 1");
	        
	        int operando1 = scanner.nextInt();
	        
	        System.out.println("Digite o operando 2");
	        
	        int operando2 = scanner.nextInt();
	        
	        
	        switch(opcao){
	            case 1:
	                
	               System.out.println(somar(operando1 , operando2));
	                break;
	            
	            case 2:
		              System.out.println(sub(operando1 , operando2));
	                break;
	            
	            case 3: 
	            	System.out.println(mult(operando1 , operando2));
	                break;
	                
	            case 4:
	            	System.out.println(divit(operando1 , operando2));
	                break;
	        
	            default:
				System.out.println("operacao invalida");
	                break;
	        }
	        if(validarResultado(resultado)){
			System.out.printl("o resultado é "+ resultado)
		}
		else{
			System.out.println("o resultado nao e valido")
		}
	}
	
	        

	    private static int somar(int num1, int num2) {
		    int resultado = num1 + num2;
		    return resultado;
	    }
	    
	    private static int sub(int num1, int num2) {
		    int resultado = num1 - num2;
		    return resultado;	
	    }

	    private static int mult(int num1, int num2) {
		    int resultado = num1 * num2;
		    return resultado;
	    }

	    private static int divit(int num1, int num2) {
		    int resultado = num1 / num2;
		    return resultado;
	    }
	    
	    private static boolean erro (int resultado ) {
		    if (resultado >= 300) {
		    	return true;
		    }
		    else 
		    	return false;
		    }
		    
	    
	    
}
