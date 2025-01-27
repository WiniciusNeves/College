package br.com.uncuritiba;
import java.util.Scanner;

import br.com.uncuritiba.model.Aluno;
import br.com.uncuritiba.model.Prof;
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
			String Nome	= null;
			String CPF = null;
			String Email = null;
			String Contato = null;
			String Matricula = null;
			Scanner scanner = new Scanner(System.in);
		
			System.out.println("cadastro de Prof ");
			System.out.println("");
			System.out.println("");
			System.out.println("cadastro de Aluno ");
			int numeroAlunos = scanner.nextInt();
			scanner.nextLine();
			Aluno[] alunos = new Aluno[numeroAlunos];
			
			for(int i = 0; i<numeroAlunos;i++) {
				
				System.out.print("Informe quantos alunos estaram presentes na turma: \n");
				
				Scanner scanner1 = new Scanner(System.in);
				int nalunos = scanner1.nextInt();
				
				for (int x = 0; x > nalunos; x++)
				{
					Aluno aluno = new Aluno();
					aluno.setNome(Nome);
					Nome = scanner.nextLine();
					aluno.setCPF(CPF);
					CPF = scanner.nextLine();
					aluno.setEmail(Email);
					Email = scanner.nextLine();
					aluno.setContato(Contato);
					Contato = scanner.nextLine();
			
			Prof professor = new Prof();
			professor.setNome(Nome);
			professor.setMatricula(Matricula);
			professor.setEmail(Email);
				
			alunos[i] = aluno;
					
			}
		
				System.out.println(alunos[0].getNome());
					
					
		}	
	}
	

}
