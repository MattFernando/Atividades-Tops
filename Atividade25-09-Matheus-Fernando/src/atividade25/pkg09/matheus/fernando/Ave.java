
package atividade25.pkg09.matheus.fernando;

public class Ave extends Animal {
    private String Bico;
    private boolean PodeVoar;
    
    public String getbico(){
        return Bico;
    }
    
    public void setbico(String bico){
        this.Bico = bico;
    }
    
    public boolean getpodeVoar(){
        return PodeVoar;
    }
    
    public void setpodeVoar(boolean podevoar){
        this.PodeVoar = podevoar;
    }
    
    public void mostrarinformacao(){
        super.mostrarinformacao();
        System.out.println("Tipode do bico: "+ getbico());
        System.out.println("Ele consegue voar?: "+ getpodeVoar());
    }
}
