
package atividade25.pkg09.matheus.fernando;

public class Mamifero extends Animal{
    private String Dieta;
    private int TempoGestacaoMeses;
    
    public String getdieta(){
        return Dieta;
    }
    
    public void setdieta(String dieta){
        this.Dieta = dieta;
    }
    
    public int gettempoGestacaoMeses(){
        return TempoGestacaoMeses;
    }
    
    public void settempoGestacaoMeses(int gestacao){
        this.TempoGestacaoMeses = gestacao;
    }
    @Override
    public String classe(){
        return ("sou um Mamifero");
    }
    
    @Override
    public void mostrarinformacao(){
        super.mostrarinformacao();
        System.out.println("Dieta: "+ getdieta());
        System.out.println("Tempo de gestacao em meses: "+ gettempoGestacaoMeses());
    }
    
}
