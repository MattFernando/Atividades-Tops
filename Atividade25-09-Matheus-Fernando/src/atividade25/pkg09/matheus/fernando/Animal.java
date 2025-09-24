
package atividade25.pkg09.matheus.fernando;

public class Animal {
    private String nome;
    private int idade;
    
    public String getnome(){
        return nome;
    }
    
    public void setnome(String nome){
        this.nome = nome;
    }
    
    public int getidade(){
        return idade;
    }
    
    public void setidade(int idade){
        this.idade = idade;
    }
    
    public void mostrarinformacao(){
        System.out.println("Nome: "+ getnome());
        System.out.println("Idade: "+ getidade());
    }
}
