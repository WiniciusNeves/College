package br.com.unicuritiba.model;

public class Aluno {

	private String Email;
	private String Nome;
	private String DataNacimento;
	private String CPF;
	private String RA;
	
	public Aluno(String Email,String Nome,String DataNacimento, String CPF, String RA){
	
		this.Email = Email;
		this.CPF = CPF;
		this.DataNacimento=  DataNacimento;
		this.RA = RA;
		this.Nome = Nome;
	}
		
	public String getEmail() {
		return Email;
	}
	public void setEmail(String email) {
		Email = email;
	}
	public String getNome() {
		return Nome;
	}
	public void setNome(String nome) {
		Nome = nome;
	}
	public String getDataNacimento() {
		return DataNacimento;
	}
	public void setDataNacimento(String dataNacimento) {
		DataNacimento = dataNacimento;
	}
	public String getCPF() {
		return CPF;
	}
	public void setCPF(String cPF) {
		CPF = cPF;
	}
	public String getRA() {
		return RA;
	}
	public void setRA(String rA) {
		RA = rA;
	}
	
	
	
	
}
