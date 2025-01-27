package br.com.unicuritiba.model;

public class UnidadeCuricular {

	private String Nome;
	private Atividade[] Atividade ;
	private Aluno[] Alunos;
	private Professor[] Professor;
	
	public UnidadeCuricular(String Nome , Atividade[] atividades, Aluno[] alunos, Professor[] professor){
		
		this.Alunos = alunos;
		this.Atividade = atividades;
		this.Nome = Nome;
		this.Professor = professor;
		
	}

	public String getNome() {
		return Nome;
	}

	public void setNome(String nome) {
		Nome = nome;
	}

	public Atividade[] getAtividade() {
		return Atividade;
	}

	public void setAtividade(Atividade[] atividade) {
		Atividade = atividade;
	}

	public Aluno[] getAlunos() {
		return Alunos;
	}

	public void setAlunos(Aluno[] alunos) {
		Alunos = alunos;
	}

	public Professor[] getProfessor() {
		return Professor;
	}

	public void setProfessor(Professor[] professor) {
		Professor = professor;
	}
	
	
	
	
}
