public class MyClass {
    import java.util.Scanner;
    public static void main(String args[]) {
     Scanner scanner = new Scanner(System.in);
     System.out.println("digite a operação que deseja:");
     System.out.println("1 - Soma");
     System.out.println("2 - Subtração");
     System.out.println("3 - multiplicação")
     System.out.println("4 - divisão")


        int opcao = scanner.nextInt();
        
        
        System.out.println("Digite o operando 1");
        
        int operando1 = scanner.nextInt();
        
        System.out.println("Digite o operando 2");
        
        int operando2 = scanner.nextInt();
        
        
        switch(opcao){
            case 1:
                
                int resultado = operando1 + operando2;
                
                break;
            
            case 2;
                break;
            
            case 3;    
                break;
                
            case 4;
                break;
        
            default:
                break
        }
        

        
    }
    
}
