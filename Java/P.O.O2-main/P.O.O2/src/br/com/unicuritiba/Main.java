package br.com.unicuritiba;

import br.com.unicuritiba.model.Professor;

public abstract class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Professor prof = new Professor("Diego Palma","12345678912","28/01/1986","diego.nvarro@unicuritiba.com.br","deigo",true);
		

		System.out.println(prof.getNome());
		System.out.println(prof.getCPF());
		System.out.println(prof.getDataNacimento());
		System.out.println(prof.getEmail());
		System.out.println(prof.getPaciencia());
		
		
		
		
		
		
		
		
		
		
		
		
	}

}
