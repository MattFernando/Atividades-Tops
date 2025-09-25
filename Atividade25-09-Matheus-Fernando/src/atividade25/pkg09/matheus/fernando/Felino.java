
package atividade25.pkg09.matheus.fernando;

public class Felino extends Animal {
    private String CorPelo;
    private double VelocidadeKM;
    
    public String getcorpelo(){
        return CorPelo;
    }
    
    public void setcorpelo(String corpelo){
        this.CorPelo = corpelo;
    }
    
    public double getvelocidadeKM(){
        return VelocidadeKM;
    }
    
    public void setvelocidadeKM(double velocidadekm){
        this.VelocidadeKM = velocidadekm;
    }
    @Override
    public String classe(){
        return ("sou um Felino");
    }
    
    @Override
    public void mostrarinformacao(){
        super.mostrarinformacao();
        System.out.println("CorPelo: "+ getcorpelo());
        System.out.println("Velocidade em KM: "+ getvelocidadeKM());
    }
}
