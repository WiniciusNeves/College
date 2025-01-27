package br.com.unicuritiba.model;

public class Professor {

	private String Nome;
	private String CPF;
	private String DataNacimento;
	private String Email;
	private String matricula;
	private boolean paciencia;
	
	public Professor(String Nome, String CPF, String DataNacimento, String Email, String matricula, boolean paciencia) {
		
		this.Email = Email;
		this.CPF = CPF;
		this.DataNacimento=  DataNacimento;
		this.matricula = matricula;
		this.Nome = Nome;
		this.paciencia = paciencia;
		
		
	}
	
	
	public String getNome() {
		return Nome;
	}
	public void setNome(String nome) {
		Nome = nome;
	}
	public String getCPF() {
		return CPF;
	}
	public void setCPF(String cPF) {
		CPF = cPF;
	}
	public String getDataNacimento() {
		return DataNacimento;
	}
	public void setDataNacimento(String dataNacimento) {
		DataNacimento = dataNacimento;
	}
	public String getEmail() {
		return Email;
	}
	public void setEmail(String email) {
		Email = email;
	}
	public String getMatricula() {
		return matricula;
	}
	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}
	public boolean getPaciencia() {
		return paciencia;
	}
	public void setPaciencia(boolean paciencia) {
		this.paciencia = paciencia;
	}
	
	
}
